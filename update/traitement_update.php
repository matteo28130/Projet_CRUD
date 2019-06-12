<?php


    require_once "../connexion/connexion.php";

    $req_update = "UPDATE identite SET name=:name , surname=:surname , birthday=:birthday  WHERE id = :id ";
    $result = $db->prepare($req_update);
    $result->bindParam(':id',$_POST['id']);
    $result->bindParam(':name', $_POST['name']);
    $result->bindParam(':surname',$_POST['surname']);
    $result->bindParam(':birthday',$_POST['birthday']);
    $result->execute();

    header('Location:../index.php');




