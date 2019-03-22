isJSON = (str) => {
    try {
        JSON.parse(str);
    } catch (e) {
        return false;
    }
    return true;
}

notifyError = (res) => {
    response = res.responseText,
        errorLevel = 'error'
    if (isJSON(res.responseText)) {
        res = JSON.parse(res.responseText)
        if (!res.valid) {
            response = res.message
            errorLevel = 'warn'
        }
    }
    if (!response) {
        response = res.statusText
    }

    errorLevel = (res.status === 202) ? 'success' : errorLevel

    $.notify(response, errorLevel);
}

/** Validate password reset token */

validateResetToken = () => {
    var url = new URL(window.location.href);
    var token = url.searchParams.get("token");
    var data = {
        token
    }

    $.ajax({
            type: "POST",
            url: "controller.php?validate_reset_token",
            data: data,
            dataType: "json"
        })
        .done((res) => {
            console.log('Valid token!')
        })
        .fail((res) => {
            $.notify('Invalid or expired token!', 'error');
            setTimeout(
                () => window.location.href = './forgot-password.php', 1500
            )
        });
}

logout = () => {
    fetch('controller.php?logout')
        .then(response => {
            document.cookie = 'token=; Max-Age=-99999999;';
            window.location.href = './login.php'
        })
}

/**
 * Login form controller
 */
$('#login-form').submit(function (e) {
    e.preventDefault();
    var data = $('#login-form').serialize();
    $.ajax({
            type: "POST",
            url: "controller.php?login",
            data: data,
            dataType: "json",
            beforeSend() {
                $('#login-form #button').text("Please wait...")
            }
        })
        .done((res) => {
            $.notify('Login Successful!', 'success');
            setTimeout(
                () => window.location.href = './app/', 1000
            )
        })
        .fail((res) => {
            notifyError(res)
        })
        .always(() => {
            $('#login-form #button').text("Sign In")
        });
});


/**
 * Sign up form controller
 */
$('#signup-form').submit(function (e) {
    e.preventDefault();
    var data = $('#signup-form').serialize();
    $.ajax({
            type: "POST",
            url: "controller.php?signup",
            data: data,
            dataType: "json",
            beforeSend() {
                $('#signup-form #button').text("Please wait...")
            }
        })
        .done((res) => {
            $.notify('Account Created', 'success');
            setTimeout(
                () => window.location.href = './login.php', 1500
            )
        })
        .fail((res) => {
            notifyError(res)
        })
        .always(() => {
            $('#signup-form #button').text("Next")
        });
});

/**
 * Forgot password form controller
 */
$('#forgot-password-form').submit(function (e) {
    e.preventDefault();
    var data = $('#forgot-password-form').serialize();
    $.ajax({
            type: "POST",
            url: "controller.php?send_reset",
            data: data,
            dataType: "json",
            statusCode: {
                202: () => {
                    $.notify('Check your email for the password reset link!', 'success')
                    setTimeout(
                        () => window.location.href = './login.php', 2000
                    )
                }
            }
        })
        .done((res) => {
            $.notify('Check your email for the password reset link!', 'success')
            setTimeout(
                () => window.location.href = './login.php', 2000
            )
        })
        .fail((res) => {
            notifyError(res)
        });
});

/**
 * Password Reset form controller
 */
$('#password-reset-form').submit(function (e) {
    e.preventDefault();
    var data = $('#password-reset-form').serializeArray();
    var url = new URL(window.location.href);
    var token = url.searchParams.get("token");
    data.push({
        name: 'token',
        value: token
    })

    $.ajax({
            type: "POST",
            url: "controller.php?password_reset",
            data: $.param(data),
            dataType: "json"
        })
        .done((res) => {
            $.notify('Password changed successfully!', 'success');
            setTimeout(
                () => window.location.href = './login.php', 1500
            )
        })
        .fail((res) => {
            notifyError(res)
        });
});

$('#mobile-nav-button').click(function (e) { 
    e.preventDefault();
    $('#mobile-nav').toggleClass('hidden');
});