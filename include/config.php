<?php
session_start();
if(!defined('ROOT_DIR')){
define('ROOT_DIR', '');
};
function getDb() {
    $dbname = "project";
    $user   = "root";
    $pass   = "root";
    try {
        $db = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
    } catch(PDOException $e) {
        die($e->getMessage());
    }
    return $db;
}
?>