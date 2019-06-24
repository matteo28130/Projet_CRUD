<?php

    session_start();

    /* $time = 365*24*3600;
    setcookie("c_login", $_POST['login'], time()+$time, "/");
    setcookie("c_pwd", $_POST['pwd'], time()+$time, "/");
    setcookie("c_name", $_POST['name'], time()+$time, "/");
    setcookie("c_surname", $_POST['surname'], time()+$time, "/");
    setcookie("c_birthday", $_POST['birthday'], time()+$time, "/"); */

    /*$_SESSION['login'] = $_POST['login'];
    $_SESSION['pwd'] = $_POST['pwd'];*/


    require_once "../connexion/connexion.php";

    $hash = $_POST['pwd'] ;

    $hash = password_hash($hash,PASSWORD_DEFAULT);



    $req = "INSERT INTO identite(login,pwd,name,surname,birthday) VALUES (:login, :pwd , :name, :surname, :birthday)";
    $regex = "/^[a-zA-Z-]{1,}$/";

    if(preg_match($regex, $_POST['name']) && preg_match($regex, $_POST['surname']) && !empty($_POST['birthday'])) {

        $result = $db->prepare($req);
        $result->bindParam(':login', $_POST['login']);
        $result->bindParam(':pwd', $hash);
        $result->bindParam(':name', $_POST['name']);
        $result->bindParam(':surname', $_POST['surname']);
        $result->bindParam(':birthday', $_POST['birthday']);
        $result->execute();


        header('Location:../connexion/access.php');



    } else {
        echo "<form action = 'register.php' method = 'post' xmlns=\"http://www.w3.org/1999/html\">
            Les caractères attendu pour la saisie de votre nom et prénom sont uniquements des lettres majuscules et miniscules, ainsi que des tirets ( si nom ou prénom composé ).</br>
             Vérifiez également à bien avoir renseigner une date de naissance
                </br>
                <p align='center'>Cliquez pour retourner a la page précédente</br><input type = 'submit' value ='Retour'></p>
              </form>";
    }

?>







