<?php

    try {
        $db = new PDO('mysql:host=localhost;dbname=formation' , 'Roger' , 'matteo' );
    }
    catch (PDOException $e) {
        print ("Erreur de connexion : ").$e->getMessage();
    }
   /* session_start();
    $_SESSION['login'] =  $_POST['login'];
    $_SESSION['pwd'] =  $_POST['pwd'];
    $_SESSION['name'] =  $_POST['name'];
    $_SESSION['surname'] =  $_POST['surname'];
    $_SESSION['birthday'] =  $_POST['birthday']; */

