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
    $array = json_decode($data, true);
    $data = file_get_contents($file_name);
    var_export(unserialize($data));

}
/**
 * Created by PhpStorm.
 * User: Sclif
 * Date: 20.01.2018
 * Time: 2:45
 */