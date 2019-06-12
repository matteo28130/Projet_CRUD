<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>
    </head>

    <body>

    <a class='accueil' href='../index.php'>Accueil</a></br>

        Supprimer l'utilisateur :

        <?php
            require_once "../connexion/connexion.php";

            if(isset($_GET['id']) && !empty($_GET['id'])) {

                $req_select = 'SELECT * FROM identite WHERE id= :id';
                $result = $db->prepare($req_select);
                $result->bindParam(':id',$_GET['id']);
                $result->execute();
                $tableau = $result->fetch(PDO::FETCH_ASSOC);
                echo $tableau['surname'].' '.$tableau['name'];
            }

        ?>

        <form action = '../delete/traitement_delete.php' method = 'get'>
            <input type='text' name='id' value="<?php echo $tableau['id'];?>" style="display: none;"/>
            <p>Veuillez confirmer la suppression de l'utilisateur !</p>
            <p><input type = 'submit' value ='OK'></p>
        </form>

    </body>
</html>