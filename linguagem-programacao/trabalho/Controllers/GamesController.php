<?php


require_once '../Classes/Game.php';
require_once '../Classes/Connection.php';
require_once '../Classes/Errors.php';

use Classes\Game;

$game = new Game();

if ($_POST["action"] === 'Adicionar') {
    $result = $game->set($_POST["name"], $_POST["description"], $_POST["link"]);
    if ($result) {
        session_start();
        $_SESSION["Game"] = $result;
        $_SESSION["register"] = true;
    }
}
header("Location: ../admin.php");
