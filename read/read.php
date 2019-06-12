<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <title>CRUD de Matteo</title>
    </head>

    <body>
        <?php

        $datas = include 'traitement_read.php';
        if(count($datas) > 0) {

            echo "<div style='text-align: center;'><a style='font-size:35px; text-decoration: none ; color: midnightblue;' href='../index.php'>Accueil</a></br></div>";

            echo "Liste des utilisateurs : </br></br>";

            foreach ($datas as $key => $value) {

                echo $value['name'] . ' ' . $value['surname'] . '</br>Date de naissance : '. $value['birthday'].'</br>';
                echo "<a href='../update/update.php?id=" . $value['id'] . "'>Modifier l'utilisateur</a></br>
                      <a href='../delete/delete.php?id=" . $value['id'] . "'>Supprimer l'utilisateur</a></br></br>";

            }

        } else {

            echo "<p style='text-align: center;'>
                        Il n'y a acutellement aucun utilisateur sur ce site.</br>
                        Regoingez nous et venez vous inscrire ici :</br>
                  </p>";

            echo "<div style='text-align: center;'><button type='button'><a style='text-decoration: none; color: crimson' href='../create/create.php'>Inscription</a></button></div>";
        }


        ?>

    </body>
</html>
