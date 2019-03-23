<?php
  require 'controller.php';
  $token = !empty($_COOKIE['token']) ? $_COOKIE['token'] : null;
  $user = validateAccessToken($token);
  if(!$user){
    header('Location: ../login.php');
    die();
  }
?>
<!DOCTYPE html>
<html dir="ltr" lang="en-US" class="no-js">

<head>
    <?php require 'includes/head.php'; ?>
</head>

<body>
    <div id="a17">
        <div class="g-under_home_cover">

            <?php require 'includes/nav.php'; ?>

            <div data-pjax-wrapper="pjax">
                <div data-pjax-container="pjax" data-namespace="main">
                    <div class="g-base_content">
                        <?php
                            if ($user->role === 'ngo') {
                                require 'includes/components/ngo-dashboard.php';
                            } else if ($user->role === 'user') {
                                require 'includes/components/user-dashboard.php';
                            }
                        ?>
                    </div>
                </div>
            </div>
            <?php require 'includes/modals.php'; ?>
        </div>

    </div>
    <?php require 'includes/scripts.php'; ?>
</body>

</html>