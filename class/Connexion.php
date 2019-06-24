<?php

require_once 'ParamConnexion.php';

class Connexion extends ParamConnexion
{

    public function __construct() {

        parent::__construct();

        try {

            new PDO("mysql:host=" . $this->getHost() . ";dbname=" . $this->getDbname(),  $this->getLogin() , $this->getPwd());
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}

