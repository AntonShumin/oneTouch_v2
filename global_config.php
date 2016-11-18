<?php

$whitelist = array(
    'localhost',
    '127.0.0.1'
);

$rootdir = $_SERVER['DOCUMENT_ROOT'];

//LOACALHOST
if (isset($_SERVER ['HTTP_HOST']) && in_array($_SERVER ['HTTP_HOST'], $whitelist)) {

    $db_host = "localhost";
    $db_naam = "salino";
    $db_gebruiker = "root";
    $db_ww = "";

} else {

//SERVER

    $db_host = "localhost";
    $db_naam = "salino";
    $db_gebruiker = "root";
    $db_ww = "";

}


function require_composer() {
    global $rootdir;
    require_once "$rootdir/inc/composer/vendor/autoload.php";
}