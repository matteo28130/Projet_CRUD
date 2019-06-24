<?php

    session_start();
    echo $_COOKIE['c_login'];

?>

<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>
    </head>

    <body>
        <?php

        $datas = include 'traitement_read.php';
        if(count($datas) > 0) {

            echo "<a class='accueil' href='../index_back.php'>Accueil</a></br>";

            echo "Liste des utilisateurs : </br></br>";

            foreach ($datas as $key => $value) {

                echo 'Login de l\'utilisateur : '.$value['login'].'</br>Informations complémentaire : </br>'.$value['name'] . ' ' . $value['surname'] . '</br>Date de naissance : '. $value['birthday'].'</br>';
                echo "<a href='../update/update.php?id=" . $value['id'] . "'>Modifier l'utilisateur</a></br>
                      <a href='../delete/delete.php?id=" . $value['id'] . "'>Supprimer l'utilisateur</a></br></br>";
            }

        } else {

            echo "<p style='text-align: center;'>
                        Il n'y a acutellement aucun utilisateur sur ce site.</br>
                        Regoingez nous et venez vous inscrire ici :</br>
                  </p>";

            echo "<div style='text-align: center;'><button type='button'><a style='text-decoration: none; color: #1616ee' href='../create/register.php'>Inscription</a></button></div>";
        }



        ?>

    </body>
</html>
