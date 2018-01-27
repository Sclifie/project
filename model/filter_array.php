<?php
function filterArr($test){

foreach ($test as $key => $value){
    trim($value," \t\n\r\0\x0B");
    strip_tags($value);
    htmlspecialchars($value);
    array_push($newarr,$value);
    }
    var_dump($newarr);
}