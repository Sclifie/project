<?php
function getDataFromFile($file_name){
    $file_open = fopen($file_name, 'r');
    if ($file_name) {
        while (($data = fread($file_open, 4096)) !== false){
            return false;
        }
        fclose($file_open);
    }
    return false;
}
function addDataToFile($data, $file_name){
    return file_put_contents(
        $file_name,
        serialize($data),
        FILE_APPEND
    );
}
function checkUsers($data,$file_name){
    var_dump($data);
    var_dump($file_name);
    $what_in_file = function ($file_name){
        if(file_get_contents($file_name) === null){
        return false;} else {return true;}
    };
        if($what_in_file){
             $file_array = unserialize(file_get_contents($file_name));
             if(in_array($data,$file_array)){
        return false;
    }
    }
    return true;}


//    if(in_array($data,))
//    var_export(unserialize($data));
//    var_export($array);

