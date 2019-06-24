<?php


    require_once "../connexion/connexion.php";
    /*if (!empty($_POST['login']) && !empty($_POST['pwd']) && !empty($_POST['name']) && !empty($_POST['surname']) && !empty($_POST['birthday'])) {

        $req_update = "UPDATE identite SET login=:login , pwd=:pwd , name=:name , surname=:surname , birthday=:birthday  WHERE id = :id ";
        $result = $db->prepare($req_update);
        $result->bindParam(':id',$_POST['id']);
        $result->bindParam(':login', $_POST['login']);
        $result->bindParam(':pwd',$_POST['pwd']);
        $result->bindParam(':name', $_POST['name']);
        $result->bindParam(':surname',$_POST['surname']);
        $result->bindParam(':birthday',$_POST['birthday']);
        $result->execute();

        header('Location:../read/read.php');

    } else {
        echo "Veuillez renseignez tous les champs avant de continuer !";
        echo "<button type='button'><a href='update.php'>Retour</a></button>";


    }*/

    $req_update = "UPDATE identite SET login = REPLACE(login,'localhost','beta.laboratoire-microsept.fr') WHERE id = :id ";
    $result = $db->prepare($req_update);
    $result->bindParam(':id',$_POST['id']);
    $result->bindParam(':login', $_POST['login']);
    $result->execute();
    header('Location:../read/read.php');









