<?php

    session_start();

    require_once "connexion/connexion.php";

?>

<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="assets/css/style.css" / >
        <title>CRUD de Matteo</title>

        <script type="text/javascript">
        </script>

    </head>

    <body>
        <a class="accueil" href=" ">Accueil</a>

        <?php
            if (isset($_SESSION['login'])){
                echo "Vous etes connecté en tant que : ".$_COOKIE['c_login'];
            }

        ?>

        <div class="container-pdf">

            <ul>
                <li><a class="lien" href='create/register.php'>Cliquez ici s'incrire</a></li>

                <?php

                if (!isset($_SESSION['login'])) {

                    echo "<li><a class='lien' href='connexion/access.php'>Cliquez ici se connecter</a></li>";

                } else {
                    echo "<li><a class='lien' href='deconnexion/deconnexion.php'>Cliquez ici pour vous deconnecter</a></li>";


                    if ($_SESSION['login'] == "Matteo_28") {

                        echo "<li><a class='lien' href='read/read.php'>Cliquez ici pour afficher la liste des utilisateurs</a></li>";


                    } else {

                        echo "Vous n'êtes pas administrateur, vous ne verrez pas la liste des utilisateurs !";

                    }
                }
                

                ?>
            </ul>

        </div>
    </body>
</html>


