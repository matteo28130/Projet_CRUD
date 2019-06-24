<?php

    require_once "../connexion/connexion.php";

    $req_select = 'SELECT * FROM identite ORDER BY id';
    $result = $db->query($req_select,PDO::FETCH_ASSOC);
    return $result->fetchAll();
    

?>

