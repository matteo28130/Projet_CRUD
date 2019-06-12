<!DOCTYPE html>
<html lang="fr" xmlns="http://www.w3.org/1999/html">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>

        <script type="text/javascript">
        </script>

    </head>

    <body>

    <?php

    require_once "../connexion/connexion.php";

    ?>

    <a class='accueil' href='../index.php'>Accueil</a>

    <form action="connexion.php" method="post">
        <p>Veuillez saisir votre login: <input type = 'text' name = 'login' /></p></br>
        <p>Veuillez saisir votre mot de passe : <input type = 'password' name = 'pwd' /></p>
        <p>Veuillez saisir votre nom : <input type = 'text' name = 'surname' /></p>
        <p>Veuillez saisir votre prénom : <input type = 'text' name = 'name' /></p>
        <p>Veuillez saisir votre date de naissance : <input type = 'date' name = 'birthday' /></p>
    </form>



    </body>
</html>
