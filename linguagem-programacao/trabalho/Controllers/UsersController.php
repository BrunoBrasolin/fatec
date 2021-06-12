<?php

// require_once 'Classes\User.php';

require_once '../Classes/User.php';
require_once '../Classes/Connection.php';
require_once '../Classes/Errors.php';

use Classes\User;

$user = new User();

if ($_POST["action"] === 'Cadastrar') {
    $result = $user->set($_POST["username"], $_POST["fullname"], $_POST["registerEmail"], $_POST["registerPassword"]);
    if ($result) {
        session_start();
        $_SESSION["user"] = $result;
        $_SESSION["register"] = true;
    }
} else if ($_POST["action"] === 'Logar') {
    $result = $user->login($_POST["username"], $_POST["password"]);
    if ($result) {
        session_start();
        $_SESSION["user"] = $result;
        $_SESSION["login"] = true;
    } else {
        $_SESSION["login"] = false;
    }
}
header("Location: ../index.php");
