<?php
session_start();
include 'read_writeJSON.php';
function getUsers(){
    $users = file_get_contents('..\users_data\users_list.txt');
    return unserialize($users);
}
function auth_users(){
    echo 'POST <br>';
    var_dump($_POST);
    $post = $_POST['reg_users_data'];
    echo 'post <br>';
    var_dump($post);
    $user_data = json_decode($post, true);
    echo 'user data decode <br>';
    var_dump($user_data);
    $all_users_data = getUsers();
    echo 'all users data decode <br>';
    var_dump($all_users_data);
    foreach ($all_users_data as $val){
        if($val['userEmail'] == $all_users_data['userEmail']){
            var_dump( $val['userEmail'] . '=' . $all_users_data['userEmail'] . "<br>");
            if ($val['userPassword'] == $all_users_data['userEmail']){
                $_SESSION['auth'] = true;
                $_SESSION['login'] = $val['userAuthEmail'];
                echo 'ok';
            }
            echo 'wrong_pw';
            return false;
        }
    }
    echo 'no_usr';
    return false;
}
auth_users();