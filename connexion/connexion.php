<?php

    try {

        $db = new PDO('mysql:host=localhost;dbname=formation' , 'Roger' , 'matteo' );
    }

    catch (PDOException $e) {

        print ("Erreur de connexion : ").$e->getMessage();

    }

