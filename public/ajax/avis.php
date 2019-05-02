<?php

$dbname = "project";
$user   = "root";
$pass   = "root";
try {
    $db = new PDO("mysql:host=localhost;dbname=$dbname;charset=utf8", $user, $pass);
} catch(PDOException $e) {
    die($e->getMessage());
}

$idAvis = $_POST['idAvis'];

if(isset($idAvis)) {

    $req = $db->prepare('DELETE FROM avis WHERE id = :id');
    $req->execute(array('id' => $idAvis));

    echo json_encode($idAvis);
}
?>