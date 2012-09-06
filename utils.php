<?php
/*
Biolerplate code that should be added to every file
*/

function __autoload($className) {
    include_once __autoloadFilename($className);
}

function __autoloadFilename($className) {
    return str_replace('_','/',$className).".php";
}



?>