<?php
require_once 'read_writeJSON.php';
function user_reg(){
    $post = $_POST['reg_users_data'];
    $post = (json_decode($post,true, 512,0));
    foreach ($post as &$value ){
        $value = trim($value," \t\n\r\0\x0B");
        $value = strip_tags($value);
        $value = htmlspecialchars($value);
//        if(strripos($value, '<?',0) !==false){
//            return false;
//        }
}
    var_export($post);
    $json_array = $post;
    var_dump($post);
    var_dump($json_array['userEmail']);
    var_dump($json_array['userLogin']);

    $email_check = checkUsers($json_array['userEmail'],'../users_data/users_list.txt');
    $login_check = checkUsers($json_array['userLogin'],'../users_data/users_list.txt');
    if($login_check === true){
        if($email_check === true){
            file_put_contents('../users_data/users_list.txt',
                $json_array,
                FILE_APPEND);
            echo 'Регистрация прошла успешно';
        } else {echo 'Пользователь с таким e-mail уже зарегистрирован';}
    }
    else {echo 'Пользователь с таким логином уже существует';}
}
user_reg();
