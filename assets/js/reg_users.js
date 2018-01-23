jQuery(document).ready(function () {
    'use strict';
    jQuery('#register_form').submit(function (e) {
        e.preventDefault();
        let regForm = jQuery('#register_form input');
        let userRegisterEmail       = regForm[0].value;
        let userRegisterLogin       = regForm[1].value;
        let userRegisterPassword    = regForm[2].value;

        let otladka = document.getElementById('otladka');

        let regUsersData = {

            userEmail   :   userRegisterEmail,
            userLogin   :   userRegisterLogin,
            userPassword:   userRegisterPassword
        };

        console.log(regUsersData);

        regUsersData = 'reg_users_data=' + JSON.stringify(regUsersData);
        console.log(regUsersData);
        jQuery.ajax({

            url: '../../model/user_registration.php',
            type: 'post',
            data: regUsersData,
            success: function (response) {
                otladka.innerHTML = response;
                console.log(response);
            },
            error:function (error) {
                console.log(error);
            }
            }
        )
    })
});