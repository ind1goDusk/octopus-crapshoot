<?php

/**
 * This class represents a SuperUser.
 * @author David Kurilla
 */
// Function to check if a user is an admin
function isAdmin($username) {
    $conn = new PDO("mysql:host=localhost;dbname=database_name", "your_username", "your_password");
    $stmt = $conn->prepare("SELECT role FROM users WHERE username = :username");
    $stmt->bindParam(':username', $username);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    if ($result && $result['role'] == "admin") {
        return true;
    }
    return false;
}

class SuperUser extends User
{

    private string $_email;

    /**
     * This is the constructor for the SuperUser.
     * @param string $username the username of the SuperUser
     * @param string $password the password of the SuperUser
     * @param string $email the email of the SuperUser
     */
    function __construct(string $username, string $password, string $email)
    {
        parent::__construct($username, $password);
        parent::setIsSuperUser(true);
        $this->_email = $email;
    }

    /**
     * This method gets the email of the SuperUser.
     * @return string the email of the SuperUser
     */
    function getEmail(): string
    {
        return $this->_email;
    }

    /**
     * This method sets the email of the SuperUser.
     * @param string $email the email of the SuperUser
     */
    function setEmail(string $email): void
    {
        $this->_email = $email;
    }

}
// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $user = validateLogin($username, $password);

    if ($user) {
        session_start();
        $_SESSION["username"] = $user["username"];

        if (isAdmin($username, $password, setEmail())) {
            header("Location: superuser.php");
        } else {
            header("Location: user.php");
        }
    } else {
        $loginError = "Invalid username or password.";
    }
}