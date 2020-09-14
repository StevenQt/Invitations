<?php
require_once 'config.php';

function initConnect(){
    $mysqli = new mysqli(DB_HOST,DB_USER,DB_PWD,DB_NAME);
    $mysqli->set_charset(DB_CHARSET);

    if ($mysqli->connect_error) {  die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error); }
    return $mysqli;
}