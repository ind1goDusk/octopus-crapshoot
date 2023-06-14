<?php

/**
 * Datalayer class used to manipulate database model
 * @author David Kurilla
 */

require_once($_SERVER['DOCUMENT_ROOT'].'/../pdo-config.php');

class Datalayer
{

    private array $_data;
    private PDO $_dbh;

    function __construct()
    {
        try{
            $this->_dbh = new PDO(DB_DSN, DB_USERNAME, DB_PASSWORD);
           //  echo 'contected to database';
        } catch (PDOException $e){
            echo $e->getMessage();
        }

    }

//    function unpackCargo(Cargo $cargo): array
//    {
//        $this->_data = array();
//
//        for ($i = 0; $i < count($cargo); $i++) {
//            $data[$i] = $cargo[$i];
//        }
//
//        return $this->_data;
//    }

    /**
     * Method creates a user
     * @param Cargo $cargo
     * @return void
     */
    function createUserObj(Cargo $cargo): void
    {

        $username = $cargo[0];
        $password = $cargo[1];

        $user = new User($username, $password);
    }

    /**
     * tests to see if we can write to database
     *
     */
    function setRow($username, $password): void
    {
        $sql = "insert into users (username, password) values (:username, :password)";

        $statement = $this->_dbh->prepare($sql);

        $statement->bindValue(':username', $username);
        $statement->bindValue(':password', $password);

        $statement->execute();
    }

    /**
     * function takes in username and password and creates a new user entry in database
     * @param $username
     * @param $password
     */
    function addUser($username, $password): void
    {

            //define query
            $sql = "INSERT INTO users (username, password) VALUES (:username, :password)";
            //prepare statement
            $statement = $this->_dbh->prepare($sql);

            //bind parameters
            $statement->bindParam(':username', $username);
            $statement->bindParam(':password', $password);

            //execute statement
         //   $statement->execute();


    }

    /**
     * function updates the high score of a specified user
     * @param $username. the user whose score is being updated
     * @param $score. the new score to be updated
     */
    function updateScore($username, $score): void
    {
        $sql = "update users set score = :score where username = :username";

        $statement = $this->_dbh->prepare($sql);

        $statement->bindParam(':score', $score);
        $statement->bindParam(':username', $username);

        $statement->execute();

    }


}