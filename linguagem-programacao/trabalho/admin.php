<?php
session_start();
if (!isset($_SESSION["user"]) || $_SESSION["user"]->type != 1) header("Location: index.php");
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
                <strong><?= $_SESSION["user"]->name ?></strong>
            </h1>
            <h2 class="h4">Ações</h2>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <button type="button" class="btn btn-success" data-toggle="modal" data-target="#addGameModal">
                        Adicionar jogo
                    </button>
                </li>
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

<div class="modal fade" id="addGameModal" tabindex="-1" aria-labelledby="addGame" aria-hidden="true">
    <form action="Controllers/GamesController.php" method="POST" class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="addGame">Adicionar jogo</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="mb-3">
                    <label for="name" class="form-label">Nome do jogo</label>
                    <input type="text" class="form-control" id="name" name="name" required />
                </div>
                <div class="mb-3">
                    <label for="description" class="form-label">Descrição do jogo</label>
                    <input type="text" class="form-control" id="description" name="description" required />
                </div>
                <div class="mb-3">
                    <label for="link" class="form-label">Link da imagem do jogo</label>
                    <input type="text" class="form-control" id="link" name="link" required />
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                <input type="submit" name="action" value="Adicionar" class="btn btn-primary" />
            </div>
        </div>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/script.js"></script>
</body>

</html>