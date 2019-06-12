<?php

    require_once "../connexion/connexion.php";

    $req = "INSERT INTO identite(name,surname,birthday) VALUES (:name, :surname, :birthday)";
    $regex = "/^[a-zA-Z-]{1,}$/";

    if(preg_match($regex, $_POST['name']) && preg_match($regex, $_POST['surname'])) {

        $result = $db->prepare($req);
        $result->bindParam(':name', $_POST['name']);
        $result->bindParam(':surname', $_POST['surname']);
        $result->bindParam(':birthday', $_POST['birthday']);
        $result->execute();

        header('Location:../index.php');

    } else {
        echo "<form action = 'create.php' method = 'post'>
            Les caractères attendu pour la saisie de votre nom et prénom sont uniquements des lettres majuscules et miniscules, ainsi que des triets ( si nom composé )
                </br>
                <p align='center'>Cliquez pour retourner a la page précédente</br><input type = 'submit' value ='Retour'></p>
              </form>";
    }

    ?>







