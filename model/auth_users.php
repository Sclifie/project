<?php
include 'read_writeJSON.php';

function getUsers(){
    $users = getDataFromFile('../user_data/users_list.txt');
    return unserialize($users);
}
function auth_users(){
    $post = $_POST;
    $user_data = json_decode($post['auth_data'], true);
    $all_users_data = getUsers();
    foreach ($all_users_data as $val){
        if($val['userAuthEmail'] == $all_users_data['userAuthEmail']){
            if ($val['userAuthPassword'] == $all_users_data['userAuthPassword']){
                echo $val['userGroupRole'];
                return true;
            }
            echo 'wrong';
            return false;
        }
    }
    echo 'wrong';
    return false;
}
auth_users();
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 21.01.2018
 * Time: 21:42
 */