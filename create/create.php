<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>
    </head>

    <body>

    <a class='accueil' href='../index.php'>Accueil</a></br>

        Créer un utilisateur :

        <form action = 'traitement.php' method = 'post'>
            <p>Veuillez saisir votre nom : <input type = 'text' name = 'surname' /></p>
            <p>Veuillez saisir votre prénom : <input type = 'text' name = 'name' /></p>
            <p>Veuillez saisir votre date de naissance : <input type = 'date' name = 'birthday' /></p>
            <p><input type = 'submit' value ='OK'></p>
        </form>

    </body>
</html>
