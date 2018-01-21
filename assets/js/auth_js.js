jQuery(document).ready(function () {
    'use strict';
    jQuery('#auth_form').submit(function (e) {
        e.preventDefault();

        let userAuthEmail = jQuery('#auth_user_email').val();
        let userAuthPassword = jQuery('#auth_user_pw').val();

        let userAuthData = {
            userAuthEmail : userAuthEmail,
            userAuthPassword : userAuthPassword
        };

        user_data = 'user_data' + JSON.stringify(userAuthData);

        jQuery.ajax({
            url : '../../model/'
        })
    }
    )

});