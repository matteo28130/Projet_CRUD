
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

    <a class='accueil' href='../index_back.php'>Accueil</a>

    <form class="register" action="traitement.php" method="post">
        <p class="register">Veuillez saisir votre login: <input type = 'text' name = 'login' /></p>
        <p class="register">Veuillez saisir votre mot de passe : <input type = 'password' name = 'pwd' /></p>
        <p class="register">Veuillez saisir votre nom : <input type = 'text' name = 'surname' /></p>
        <p class="register">Veuillez saisir votre prénom : <input type = 'text' name = 'name' /></p>
        <p class="register">Veuillez saisir votre date de naissance : <input type = 'date' name = 'birthday' /></p>
        <label class='button'><input type = 'submit' value ='Inscription'></label>
        <div><button type='button'><a style='text-decoration: none; color: black' href='../index_back.php'>Retour</a></button></div>

    </form>

    </body>
</html>
