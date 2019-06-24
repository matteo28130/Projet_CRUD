<?php

    if (isset($_SESSION['login'])) {
        header('Location:../index_back.php');
    }

    require_once "../connexion/connexion.php";


    if (isset($_POST['login']) == true) {

        $req_select = 'SELECT * FROM identite WHERE (login = :login)';
        $result = $db->prepare($req_select);
        $result->bindParam(':login',$_POST['login']);
        $result->execute();
        $tableau = $result->fetch(PDO::FETCH_ASSOC);



        if (password_verify($_POST['pwd'],$tableau['pwd']) == true) {

            header('Location:../index_back.php');

        } else {
            echo "Veuillez réessayer la connexion à échoué";


        }
    }


    session_start();

    $req_select_2 = 'SELECT * FROM identite WHERE (login = :login)';
    $result = $db->prepare($req_select_2);
    $result->bindParam(':login',$_POST['login']);
    $result->execute();
    $tableau = $result->fetch(PDO::FETCH_ASSOC);

    $_SESSION['login']=$tableau['login'];
    $_SESSION['name']=$tableau['name'];
    $_SESSION['surname']=$tableau['surname'];
    $_SESSION['birthday']=$tableau['birthday'];

    setcookie('c_login',$_SESSION['login'],time()+3600);
    setcookie('c_name',$_SESSION['name']);
    setcookie('c_surname',$_SESSION['surname']);
    setcookie('c_birthday',$_SESSION['birthday']);




