<!DOCTYPE html>
<html lang="fr">

    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../assets/css/style.css" / >
        <title>CRUD de Matteo</title>
    </head>

    <body>

    <a class='accueil' href='../index.php'>Accueil</a></br>

        Modifié l'utilisateur :

        <?php
        require_once "../connexion/connexion.php";
        if(isset($_GET['id']) && !empty($_GET['id'])) {
            $req_select = 'SELECT * FROM identite WHERE id= :id';
            $result = $db->prepare($req_select);
            $result->bindParam(':id', $_GET['id']);
            $result->execute();
            $tableau = $result->fetch(PDO::FETCH_ASSOC);
            echo '</br>'.$tableau['surname'] . ' ' . $tableau['name'] . '</br>Date de naissance : ' . $tableau['birthday'];
        }
        ?>

        <form action = '../update/traitement_update.php' method = 'post'>
            <input type='text' name='id' value="<?php echo $tableau['id'];?>" style="display: none;"/>
            <p>Veuillez saisir le nouveau nom : <input type='text' name='surname' value="<?php echo $tableau['surname'];?>" /></p>
            <p>Veuillez saisir le nouveau prénom: <input type='text' name='name' value="<?php echo $tableau['name'];?>" /></p>
            <p>Veuillez saisir la nouvelle date de naissance: <input type='date' name='birthday' value="<?php echo $tableau['birthday'];?>" /></p>
            <p><input type = 'submit' value ='OK'></p>
        </form>

    </body>
</html>
