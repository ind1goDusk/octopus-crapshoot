<?php

/**
 * Class provides static methods to validate inputs
 * @author David Kurilla
 */
class Validations
{

    /**
     * This method validates the username of the User or SuperUser
     * @param string $username the username of the User or SuperUser
     * @return bool the validity of the username of the User or SuperUser
     */
    static function validateUsername(string $username): bool
    {
        if (preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $username)) {

            $sql = "SELECT * FROM user WHERE username = ':username'";

            $statement = $dbh->prepare($sql);

            $statement->bindParam(':username', $username);

            $table = $statement->execute();

          //  if ()

            return false;
        } else {
            return true;
        }
    }

    /**
     * This method validates the email of the SuperUser
     * @param string $email the email address of the SuperUser
     * @return bool the validity of the email address of the SuperUser
     */
    static function validateEmail(string $email): bool
    {
        $email = filter_var($email, FILTER_SANITIZE_EMAIL);

        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

}