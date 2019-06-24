<?php
    if (isset($_SESSION['login'])) {
        header('Location:../index_back.php');
    }
?>

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

        <a class='accueil' href='../index_back.php'>Accueil</a>

        Veuillez vous connectez :

        <form action="login.php" method="post">

            <p>Veuillez saisir votre login: <input type = 'text' name = 'login' /></p>
            <p>Veuillez saisir votre mot de passe : <input type = 'password' name = 'pwd' /></p>

            <p><input type = 'submit' value ='OK'></p>
        </form>


    </body>
</html>
