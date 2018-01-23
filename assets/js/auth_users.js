jQuery(document).ready(function () {
    'use strict';
    jQuery('#auth_form').submit(function (e) {
            e.preventDefault();

            let userAuthEmail = jQuery('#auth_user_email').val();
            let userAuthPassword = jQuery('#auth_user_pw').val();
            let authStatus = jQuery('#auth_status');
            console.log(authStatus);
            let userAuthData = {
                userAuthEmail: userAuthEmail,
                userAuthPassword: userAuthPassword
            };

            // let checkStatus = checkClientInput(userAuthData) === undefined ? false : true;
            // console.log('Check Status',checkStatus);

            console.log('hello AJAX');

            userAuthData = 'user_data=' + JSON.stringify(userAuthData);

            jQuery.ajax({
                url: '../../model/auth_users' + '.php',  //auth_users
                type: 'post',
                data: userAuthData,
                success: function (response) {
                    switch (response) {
                        case 'ok'    :
                            console.log(response);
                            break;
                        case 'wrong' :
                            console.log(response);
                            break;
                        case 'users' :
                            console.log(response);
                            break;
                        case 'admins':
                            console.log(response);
                            break;
                    }
                },
                error: function (error) {
                    console.log('All about ERRORS', error);
                }
            })
        }
    )

});

// function checkClientInput(userData) {
//     for (let keys in userData){
//         if(5 < userData[keys].length < 40){
//             console.log(userData[keys].length);
//
//         } else {
//             console.log(userData[keys].length);
//             }
//     }
// }