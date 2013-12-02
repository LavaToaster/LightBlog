var User = {};

(function() {
    User.login = function(event) {
        event.preventDefault();
        var $errorBox = $('#login-errors');
        $errorBox.html(''); // Remove all errors

        $.ajax({
            type: 'post',
            url: '/login',
            data: $('#login-form').serialize(),
            success: function(data) {
                if ( data.success ) {
                    return User.initialise(data.user);
                }

                var $errors = data.errors;

                if( $errors.email ) {
                    $errorBox.append('<span class="alert alert-danger login-alert">' + $errors.email[0] + '</span>');
                }

                if( $errors.password ) {
                    $errorBox.append('<span class="alert alert-danger login-alert">' + $errors.password[0] + '</span>');
                }

                if( $errors.wrong ) {
                    $errorBox.append('<span class="alert alert-danger login-alert">' + $errors.wrong[0] + '</span>');
                }

                if( $errors ) {
                    $('.login-modal').addClass('shake animated');
                    setTimeout(function() {
                        $('.login-modal').removeClass('shake animated');
                    }, 1000);
                }
            }
        });
    };

    User.initialise = function(user) {
        window.location.reload();
        $('.login-modal').addClass('tada animated');
        // TODO: Init frontend for user display
    };

    $('#login-form').submit(User.login);
})();