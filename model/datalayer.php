<?php

/**
 * Datalayer class used to manipulate database model
 * @author David Kurilla
 */

require_once($_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php');

class Datalayer
{

    private array $_data;
    private $_dbh;

    function __construct()
    {
        try {
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
            //echo "connected to database!";
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    function unpackCargo($cargo): array
    {
        $this->_data = array();

        for ($i = 0; $i < count($cargo); $i++) {
            $data[$i] = $cargo[$i];
        }

        return $this->_data;
    }

}