<?php

    require_once "connexion/connexion.php";

?>

<?php

    function bonjour($a) {
        $a = "bonjour";
        require $a. '.php';

    }

    spl_autoload_register('bonjour');

    var_dump($a);


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

        <div class="container-pdf">

            <ul>
                <li><a class="lien" href='create/login.php'>Cliquez ici s'incrire</a></li>
                <li><a class="lien" href='connexion/access.php'>Cliquez ici se connecter</a></li>

                <?php

                if (isset($_POST['login']) and $_POST['login'] == "Matteo_28" && isset($_POST['pwd']) and $_POST['pwd'] == "roger") {

                    echo "<a class='lien' href='read/read.php'>Cliquez ici pour afficher la liste des utilisateurs</a>";

                } else {
                    echo "Vous n'êtes pas administrateur, vous ne verrez pas la liste des utilisateurs !";
                }

                ?>
            </ul>

        </div>
    </body>
</html>

