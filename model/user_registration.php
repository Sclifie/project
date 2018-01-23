<?php
require_once 'read_writeJSON.php';
function user_reg(){
    $post = $_POST['reg_users_data'];
    $login_check = checkUsers($post,'../users_data/users_list.txt');
    if($login_check == true){
    file_put_contents('../users_data/users_list.txt',
        serialize(json_decode($post, true)),
        FILE_APPEND);
    echo 'Регистрация прошла успешно';}
    else {echo 'Пользователь с таким логином уже существует';}
}
user_reg();
