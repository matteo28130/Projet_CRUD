<?php

/**
 * Created by PhpStorm.
 * User: omar
 * Date: 18/06/19
 * Time: 15:34
 */
class ParamConnexion
{

    private $host;

    private $dbname;

    private $login;

    private $pwd;

    public function __construct()
    {
        $this->host = 'localhost';
        $this->dbname = 'formation';
        $this->login = 'Roger';
        $this->pwd = 'matteo';
    }

    /**
     * @return mixed
     */
    public function getHost()
    {
        return $this->host;
    }

    /**
     * @param mixed $host
     */
    public function setHost($host)
    {
        $this->host = $host;
    }

    /**
     * @return mixed
     */
    public function getDbname()
    {
        return $this->dbname;
    }

    /**
     * @param mixed $dbname
     */
    public function setDbname($dbname)
    {
        $this->dbname = $dbname;
    }

    /**
     * @return mixed
     */
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * @param mixed $login
     */
    public function setLogin($login)
    {
        $this->login = $login;
    }

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd)
    {
        $this->pwd = $pwd;
    }


}