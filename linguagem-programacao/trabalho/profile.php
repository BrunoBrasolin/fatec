<?php
session_start();
if (!isset($_SESSION["user"])) header("Location: index.php");
require_once 'Partials/header.php';

require_once 'Classes/Game.php';

use Classes\Game;

$game = new Game();
?>


<div class="container">
    <div class="row">
        <div class="col-md-5">
            <h1 class="h2">
                Seja bem vindo<br />
                <strong> <?= $_SESSION["user"]->name ?></strong>
            </h1>
            <h2 class="h4">Seus dados</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item"><?= $_SESSION["user"]->name ?></li>
                <li class="list-group-item"><?= $_SESSION["user"]->username ?></li>
                <li class="list-group-item"><?= $_SESSION["user"]->email ?></li>
            </ul>
        </div>
        <div class="col-md-7">
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Imagem</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($game->get() as $game) : ?>
                        <tr>
                            <th scope="row"><?= $game["id"] ?></th>
                            <td><?= $game["name"] ?></td>
                            <td><?= $game["description"] ?></td>
                            <td><img src="<?= $game["image_link"] ?>" alt="Imagem <?= $game["name"] ?>" title="Imagem <?= $game["name"] ?>"></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/script.js"></script>
</body>

</html>