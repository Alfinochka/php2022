<?php

function setTitle($value="Main"){
    $GLOBALS['meta_title'] = $value;
}
function getTitle(){
    global $meta_title;
    return $meta_title;
}

function metaTitle($arg = null){
    static $value = "Mainpage";
    if($arg){
        $value = $arg;
    }
    else {
        return $value;
    }
}

function metaData(...$args){
    static $data = [];
    if(sizeof($args)==2){
        [$k, $v] = $args;
        $data[$k] = $v;
    }
    elseif(sizeof($args)==1){
        $k = $args[0];
        return $data[$k] ?? "";
    }
}