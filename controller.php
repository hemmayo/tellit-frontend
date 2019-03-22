<?php
session_start();
ini_set('memory_limit', '512M');
ini_set('max_execution_time', 300);

const API = [
    "master_key" => 'helloworldmaster',
    "base_url" => 'http://tellit-api.herokuapp.com',
    "paystack_secret_key" => 'sk_live_cc2f74fc7a3061afd13150db3a4d35f80ab38b4e',
    "paystack_public_key" => 'pk_live_7df368c0db35d6247cd2ad2a2be35b936c425076',
];
define('ACCESS_TOKEN', !empty($_COOKIE['token']) ? $_COOKIE['token'] : null);

function getData($type)
{
    $data = array();

    if ($_SERVER['REQUEST_METHOD'] == 'PUT') {
        parse_str(file_get_contents("php://input"), $_PUT);
        foreach ($_PUT as $key => $value) {
            unset($_PUT[$key]);
            $_PUT[str_replace('amp;', '', $key)] = $value;
        }
        $_REQUEST = array_merge($_REQUEST, $_PUT);
    }

    switch ($type) {
        case 'GET':
            foreach ($_GET as $key => $value) {
                array_push($data, array($key, $value));
            }
            break;
        case 'POST':
            foreach ($_POST as $key => $value) {
                array_push($data, array($key, $value));
            }
            break;

        default:
            $data = null;
            break;
    }
    return $data;

}

function respond($data, $code = 200)
{
    http_response_code($code);
    print_r($data);
}

function sendGET($url, $access_token = API['master_key'])
{
    // Get cURL resource
    $curl = curl_init();
    // Set some options - we are passing in a useragent too here
    curl_setopt_array($curl, array(
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_URL => $url,
    ));
    // Send the request & save response to $resp
    $response = curl_exec($curl);
    // Close request to clear up some resources
    $info = curl_getinfo($curl);
    curl_close($curl);
    return [
        'status_code' => $info['http_code'],
        'body' => $response,
    ];
}

function sendPOST($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_POST, true);
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($curl);
    $info = curl_getinfo($curl);
    curl_close($curl);
    return [
        'status_code' => $info['http_code'],
        'body' => $response,
    ];
}

function sendPUT($url, $data)
{
    $curl = curl_init($url);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT");
    curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));

    $response = curl_exec($curl);
    $info = curl_getinfo($curl);
    curl_close($curl);
    return [
        'status_code' => $info['http_code'],
        'body' => $response,
    ];
}

function verifyPaystackPayment($ref = '')
{
    $result = array();
//The parameter after verify/ is the transaction reference to be verified
    $url = 'https://api.paystack.co/transaction/verify/' . $ref;
    // echo $ref;
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt(
        $ch, CURLOPT_HTTPHEADER, [
            'Authorization: Bearer ' . API['paystack_secret_key']]
    );
    $request = curl_exec($ch);
    curl_close($ch);

    if ($request) {
        $result = json_decode($request, true);
        // print_r($result);
        if ($result) {
            if ($result['data']) {
                //something came in
                if ($result['data']['status'] == 'success') {
                    // the transaction was successful, you can deliver value
                    /*
                    @ also remember that if this was a card transaction, you can store the
                    @ card authorization to enable you charge the customer subsequently.
                    @ The card authorization is in:
                    @ $result['data']['authorization']['authorization_code'];
                    @ PS: Store the authorization with this email address used for this transaction.
                    @ The authorization will only work with this particular email.
                    @ If the user changes his email on your system, it will be unusable
                     */
                    return $result['data'];
                } else {
                    // the transaction was not successful, do not deliver value'
                    // print_r($result);  //uncomment this line to inspect the result, to check why it failed.
                    return false;
                }
            } else {
                // echo $result['message'];
                // return ["status" => false, "message" => $result['message']];
            }

        } else {
            // print_r($result);
            // die("Something went wrong while trying to convert the request variable to json. Uncomment the print_r command to see what is in the result variable.");
        }
    } else {
        // var_dump($request);
        // die("Something went wrong while executing curl. Uncomment the var_dump line above this line to see what the issue is. Please check your CURL command to make sure everything is ok");
    }
    return false;
}

function createAccount($data = [])
{
    $data['access_token'] = API['master_key'];
    return sendPOST(API['base_url'] . '/users', $data);
}

function auth($email = '', $password = '')
{
    $url = API['base_url'] . '/auth';
    $data = [
        'access_token' => API['master_key'],
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_USERPWD, "$email:$password");
    curl_setopt($ch, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
    $response = curl_exec($ch);
    $info = curl_getinfo($ch);
    curl_close($ch);

    $tempResponse = json_decode($response);
    if (!empty($tempResponse->token)) {
        setcookie("token", $tempResponse->token);
    }
    return [
        'status_code' => $info['http_code'],
        'body' => $response,
    ];
}

function sendReset($email = '', $link = '')
{
    $data = [
        'access_token' => API['master_key'],
        'email' => $email,
        'link' => $link,
    ];
    return sendPOST(API['base_url'] . '/password-resets', $data);
}

function resetPassword($password = '', $token = '')
{
    // $token = str_replace('/', '', $token);
    $data = [
        'password' => $password,
    ];
    // echo $token;
    return sendPUT(API['base_url'] . '/password-resets/' . $token, $data);
}

function validateResetToken($token = '')
{
    $token = str_replace('/', '', $token);
    return sendGET(API['base_url'] . '/password-resets/' . $token);
}

function fetchMe()
{
    return sendGET(API['base_url'] . '/users/me?access_token=' . ACCESS_TOKEN);
}

function updateUser($id = '', $data = [])
{
    $data['access_token'] = ACCESS_TOKEN;
    // echo $token;
    return sendPUT(API['base_url'] . '/users/' . $id, $data);
}

function getWalletTransaction($id = '')
{
    $res = sendGET(API['base_url'] . '/wallet_transactions/' . $id . '?access_token=' . ACCESS_TOKEN)['body'];
    return json_decode($res);
}

function getWalletTransactionByRef($ref = '')
{
    $res = sendGET(API['base_url'] . '/wallet_transactions/ref/' . $ref . '?access_token=' . ACCESS_TOKEN)['body'];
    return json_decode($res);
}

function saveWalletTransaction($data = [])
{
    $data['access_token'] = ACCESS_TOKEN;
    return sendPOST(API['base_url'] . '/wallet_transactions/', $data);
}

function updateWalletTransaction($data = [])
{
    $data['access_token'] = ACCESS_TOKEN;
    $res = sendPUT(API['base_url'] . '/wallet_transactions/' . $data['id'], $data)['body'];
    return $res;
}

function getCardTransaction($id = '')
{
    $res = sendGET(API['base_url'] . '/card_transactions/' . $id . '?access_token=' . ACCESS_TOKEN)['body'];
    return json_decode($res);
}

function saveCardTransaction($data = [])
{
    $data['access_token'] = ACCESS_TOKEN;
    return sendPOST(API['base_url'] . '/card_transactions/', $data);
}

function updateCardTransaction($data = [])
{
    $data['access_token'] = ACCESS_TOKEN;
    $res = sendPUT(API['base_url'] . '/card_transactions/' . $data['id'], $data)['body'];
    return $res;
}

function validateWalletTransaction($ref = null)
{
    $data['access_token'] = ACCESS_TOKEN;
    if ($payment = verifyPaystackPayment($ref)) {
        $amount = $payment['amount'];
        if ($transaction = getWalletTransactionByRef($ref)) {

            if ($transaction->status == false) {
                $transaction->status = true;
                $transaction = json_decode(json_encode($transaction), true);
                if (updateWalletTransaction($transaction)) {
                    return updateBalance($amount / 100, 'credit');
                }
            }

        }
    }
    return false;
}

function updateBalance($amount = 0, $action = 'debit')
{
    $amount = abs($amount);
    $user = fetchMe()['body'];
    $user = json_decode($user);
    $user->access_token = ACCESS_TOKEN;
    $currentBalance = abs($user->balance);

    if ($action == 'debit') {
        $user->balance -= ($amount);
    } else if ($action == 'credit') {
        $user->balance += ($amount);
    } else {
        // do nothing
    }

    return sendPUT(API['base_url'] . '/users/' . $user->id . '/balance', $user);
}

function fetchCardCategories($category = null, $search = null)
{
    return sendGET(API['base_url'] . '/card_categories/' . $category . '?q='. $search);
}

function fetchCardCategoriesView($category = null, $search = null)
{
    $view = '<div class="row">';
    $search = !empty($search) ? '?q='.$search : '';
    $response = sendGET(API['base_url'] . '/card_categories/' . $category . $search);
    $cards = json_decode($response['body']);
    if ($cards = json_decode($response['body'])) {
        $count = 1;
        foreach ($cards as $card) {
            $response = sendGET(API['base_url'] . '/card_categories/' . $card->id);
            $card = json_decode($response['body']);
            $total = (intval($card->count->total) == 0) ? 1 : $card->count->total;
            $remainingBar = ($card->count->active / $total) * 100;
            $card->tag = !empty($card->tag) ? $card->tag : 'General';
            $btnText = ($card->count->active > 0) ? 'Buy now' : 'Sold out';
            $btnAttr = ($card->count->active > 0) ? '' : 'disabled';
            $view .= '<div class="col-lg-4">
                        <div class="card card-default">
                            <div class="progress progress-small m-b-0">
                                <div style="width: '.$remainingBar.'%;" class="progress-bar progress-bar-success"></div>
                            </div>
                            <div class="card-header ">
                                <div class="card-title">' . ($card->tag) . '
                                </div>
                                <div class="card-controls">
                                <ul>
                                    <li><a data-toggle="close" class="card-close" href="#"><i class="card-icon card-icon-close"></i></a>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <div class="card-block">
                                <h4><span class="semi-bold">' . $card->name . '</span></h4>
                                <p>' . $card->description . '</p>
                                <div class="pull-left m-t-5">
                                    <i class="fa fa-tag"></i> 
                                    <strong> &#8358;' . number_format($card->price, 2) . '</strong>
                                </div>
                                <div class="pull-right hint-text">
                                    <button class="btn btn-sm btn-rounded" onclick="loadBuyCardModal(\''.$card->id.'\')" '.$btnAttr.'>'.$btnText.'</button>
                                </div>
                            </div>
                        </div>
                    </div>';
            if ($count % 3 === 0) {
                $view .= '</div><div class="row">';
            }
            $count++;
        }
        $view .= '</div>';
    }
    return ["body" => $view, "status_code" => $response['status_code']];
}

function logout()
{
    session_unset();
    session_destroy();
    $_COOKIE['token'] = null;
}

function validateAccessToken($token = '')
{
    $data = sendGET(API['base_url'] . '/users/me?access_token=' . $token);
    $response = false;
    try {
        $user = json_decode($data['body']);
    } catch (Exception $e) {
        $user = null;
    }
    if (!empty($user->email)) {
        $response = $user;
    }
    return $response;
}

function buyCard($data)
{
    $data['access_token'] = ACCESS_TOKEN;
    return sendPOST(API['base_url'] . '/card_categories/buy/' . $data['category'], $data);
}

function page($type = null, $appendTitle = null){
    switch ($type) {
        case 'title':
            $file = basename($_SERVER['PHP_SELF'], ".php");
            // $_SESSION['current_page'] = $file;
            switch($file){
                case '404':
                    $data = 'Page not found';
                    break;
                case '500':
                    $data = 'Internal Server Error';
                    break;
                case 'index':
                    $data = 'Dashboard';
                    break;
                case 'change_password':
                    $data = 'Change Password';
                    break;
                case 'profile':
                    $data = 'Your Profile';
                    break;
                case 'settings':
                    $data = 'Settings';
                    break;
                case 'wallet_transactions':
                    $data = 'Wallet Transactions';
                    break;
                case 'card_transactions':
                    $data = 'Card Transactions';
                    break;
                default:
                    $data = "unknown page";
                    break;
            }
            $data .= ' '.$appendTitle. " - eQuickcards";
            break;
        
        default:
            $data = null;
            break;
    }
    return $data;
}

function pageHome($type = null, $appendTitle = null){
    switch ($type) {
        case 'title':
            $file = basename($_SERVER['PHP_SELF'], ".php");
            // $_SESSION['current_page'] = $file;
            switch($file){
                case '404':
                    $data = 'Page not found';
                    break;
                case '500':
                    $data = 'Internal Server Error';
                    break;
                case 'index':
                    $data = 'eQuickcards - Instant cards delivery';
                    break;
                case 'login':
                    $data = 'Login to eQuickcards';
                    break;
                case 'sign-up':
                    $data = 'Create an account - eQuickcards';
                    break;
                case 'terms':
                    $data = 'Terms and Conditions - eQuickcards';
                    break;
                case 'password-reset':
                    $data = 'Set a new password - eQuickcards';
                    break;
                case 'forgot-password':
                    $data = 'Request a new password - eQuickcards';
                    break;
                default:
                    $data = "eQuickcards";
                    break;
            }
            break;
        
        default:
            $data = null;
            break;
    }
    return $data;
}

if (isset($_GET)) {

    $getData = getData('GET');
    $data = getData('POST');
    if (!empty($getData[0][0])) {
        $endpoint = $getData[0][0];
    } else {
        $endpoint = null;
    }

    switch ($endpoint) {
        case 'login':
            $email = !empty($_POST['email']) ? $_POST['email'] : null;
            $password = !empty($_POST['password']) ? $_POST['password'] : null;
            $data = auth($email, $password);
            respond($data['body'], $data['status_code']);
            break;
        case 'signup':
            $data = createAccount($_POST);
            respond($data['body'], $data['status_code']);
            break;
        case 'send_reset':
            $email = !empty($_POST['email']) ? $_POST['email'] : null;
            $link = !empty($_POST['link']) ? $_POST['link'] : null;
            $data = sendReset($email, $link);
            respond($data['body'], $data['status_code']);
            break;
        case 'password_reset':
            $password = !empty($_POST['password']) ? $_POST['password'] : null;
            $token = !empty($_POST['token']) ? $_POST['token'] : null;
            $data = resetPassword($password, $token);
            respond($data['body'], $data['status_code']);
            break;
        case 'validate_reset_token':
            $token = !empty($_POST['token']) ? $_POST['token'] : null;
            $data = validateResetToken($token);
            respond($data['body'], $data['status_code']);
            break;
        case 'me':
            $data = fetchMe();
            respond($data['body'], $data['status_code']);
            break;
        case 'update_me':
            $user = json_decode(fetchMe()['body']);
            $data = updateUser($user->id, $_POST);
            respond($data['body'], $data['status_code']);
            break;
        case 'save_wallet_transaction':
            $data = saveWalletTransaction($_POST);
            respond($data['body'], $data['status_code']);
            break;
        case 'validate_wallet_transaction':
            $ref = !empty($_GET['ref']) ? $_GET['ref'] : null;
            $data = validateWalletTransaction($ref);
            respond($data['body'], $data['status_code']);
            break;
        case 'card_categories':
            $category = !empty($_GET['category']) ? $_GET['category'] : null;
            $search = !empty($_GET['search']) ? $_GET['search'] : null;
            $data = fetchCardCategories($category, $search);
            respond($data['body'], $data['status_code']);
            break;
        case 'card_categories_view':
            $category = !empty($_GET['category']) ? $_GET['category'] : null;
            $search = !empty($_GET['search']) ? $_GET['search'] : null;
            $data = fetchCardCategoriesView($category, $search);
            respond($data['body'], $data['status_code']);
            break;
        case 'buy_card':
            $data = buyCard($_POST);
            respond($data['body'], $data['status_code']);
            break;
        case 'generate':
            // $data = [
            //     "access_token" => "eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJpZCI6IjVjNmZmYTMxZWQ5NDg4MTQ1NzQ4OTUyNCIsImlhdCI6MTU1MDg0MjQxN30.qMtNWQE6ZqSkVjzTO1ME1IzWe3vVlG9RXFXTyEOyiRI",
            //     "category" => "5c6ffaf1ed94881457489525",
            //     "details" => [
            //         "code" => "FIFA001"
            //     ]
            // ];
            // for($i=1; $i<=1024; $i++) {
            //     $data["details"]["code"] = "FIFA".str_pad($i, 3, '0', STR_PAD_LEFT);
            //     $options = array(
            //         'http' => array(
            //           'method'  => 'POST',
            //           'content' => json_encode( $data ),
            //           'header'=>  "Content-Type: application/json\r\n" .
            //                       "Accept: application/json\r\n"
            //           )
            //       );
                  
            //       $context  = stream_context_create( $options );
            //       $result = file_get_contents( 'http://equickcards.com:8080/cards/', false, $context );
            //       $response = json_decode( $result );
                // $res = sendPOST('http://equickcards.com:8080/cards/', $data);
                // var_dump($res);
                // echo json_encode($data);
            // }
            break;
        case 'xxxupdate_balance':
            // $user = json_decode(fetchMe()['body']);
            $data = updateBalance($_GET['amount'], 'credit');
            respond($data['body'], $data['status_code']);
            break;
        case 'logout':
            logout();
            respond('Logged out successfully!', 204);
            break;
        default:
            // respond(null, 404);
            break;
    }
}
