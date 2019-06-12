<?php

    require_once "../connexion/connexion.php";

    if(isset($_GET['id']) && !empty($_GET['id'])) {

        $req_delete = "DELETE FROM identite WHERE id = :id ";
        $result = $db->prepare($req_delete);
        $result->bindParam(':id', $_GET['id']);
        $result->execute();

        header('Location:../index.php');
    }

