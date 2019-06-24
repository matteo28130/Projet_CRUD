<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>
    </head>

    <body>

    <a class='accueil' href='../index_back.php'>Accueil</a></br>

        Supprimer l'utilisateur dont le login est :

        <?php
            require_once "../connexion/connexion.php";

            if(isset($_GET['id']) && !empty($_GET['id'])) {

                $req_select = 'SELECT * FROM identite WHERE id= :id';
                $result = $db->prepare($req_select);
                $result->bindParam(':id',$_GET['id']);
                $result->execute();
                $tableau = $result->fetch(PDO::FETCH_ASSOC);
                echo $tableau['login'];
            }

        ?>

        <form action = '../delete/traitement_delete.php' method = 'get'>
            <input type='text' name='id' value="<?php echo $tableau['id'];?>" style="display: none;"/>
            <p>Veuillez confirmer la suppression de l'utilisateur !</p>
            <p><input type = 'submit' value ='OK'></p>
            <div><button type='button'><a style='text-decoration: none; color: black' href='../read/read.php'>Retour</a></button></div>
        </form>

    </body>
</html>