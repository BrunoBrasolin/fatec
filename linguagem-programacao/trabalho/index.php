<?php
session_start();
require_once 'Partials/header.php';
?>


<?php if (isset($_SESSION["register"]) && $_SESSION["register"]) :  ?>
  <div class="alert alert-success" role="alert">
    Usuário <?= $_SESSION["user"]->name ?> criado com sucesso.
  </div>
<?php
  unset($_SESSION["register"]);
endif;
?>


<?php if (isset($_SESSION["login"]) && $_SESSION["login"]) :  ?>
  <div class="alert alert-success" role="alert">
    Seja bem vindo, <?= $_SESSION["user"]->name ?>.
  </div>
<?php
  unset($_SESSION["login"]);
endif;
?>
<main>
  <div id="jumbotron">
    <img id="bg-chamativo" src="https://joystickterrivel.com.br/wp-content/uploads/2018/08/INTZ-Game-House-09-1024x468.jpg" alt="Banner chamativo" title="Banner chamativo" />
    <a href="#content">
      <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
        <path d="M0 7.33l2.829-2.83 9.175 9.339 9.167-9.339 2.829 2.83-11.996 12.17z" /></svg>
    </a>
  </div>

  <div id="content" class="container-fluid py-4">
    <div class="row">
      <div class="col-lg-4">
        <div class="accordion" id="accordionExample">
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingOne">
              <button class="accordion-button" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">Primeiro Item</button>
            </h2>
            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
              <div class="accordion-body">
                Ma você, topa ou não topamm. É por sua conta e riscoamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Ha hai. Bem
                boladoam, bem boladoam. Bem gozadoam. Ma vejam só, vejam só.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingTwo">
              <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">Segundo Item</button>
            </h2>
            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
              <div class="accordion-body">
                Ma você, topa ou não topamm. É por sua conta e riscoamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Ha hai. Bem
                boladoam, bem boladoam. Bem gozadoam. Ma vejam só, vejam só.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header" id="headingThree">
              <button class="accordion-button collapsed" type="button" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                Terceiro Item
              </button>
            </h2>
            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
              <div class="accordion-body">
                Ma você, topa ou não topamm. É por sua conta e riscoamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Ha hai. Bem
                boladoam, bem boladoam. Bem gozadoam. Ma vejam só, vejam só.
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card mx-auto" style="width: 18rem">
          <img src="https://i1.wp.com/reidainformatica.com.br/wp-content/uploads/2019/04/1490025712_maxresdefault.jpg?fit=1280%2C720&ssl=1" class="card-img-top" alt="Setup Gamer" title="Setup Gamer" />
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">
              Ma você, topa ou não topamm. É por sua conta e riscoamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Ha hai. Bem
              boladoam, bem boladoam. Bem gozadoam. Ma vejam só, vejam só.
            </p>
          </div>
        </div>
      </div>

      <div class="col-lg-4 col-md-6 my-3">
        <div class="card mx-auto" style="width: 18rem">
          <img src="https://i.pinimg.com/originals/e8/8c/4c/e88c4c4ae629223684cf8bf90d5c48e8.jpg" class="card-img-top" alt="Setup Gamer Bacana" title="Setup Gamer Bacana" />
          <div class="card-body">
            <h5 class="card-title">Título do card</h5>
            <p class="card-text">
              Ma você, topa ou não topamm. É por sua conta e riscoamm? Ma! Ao adquirir o carnê do Baú, você estará concorrendo a um prêmio de cem mil reaisam. É com você Lombardiam. Ha hai. Bem
              boladoam, bem boladoam. Bem gozadoam. Ma vejam só, vejam só.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="carousel" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="https://i.pinimg.com/originals/ba/02/d4/ba02d43bdd82af89a3a5a1ecf0113431.jpg" class="d-block w-100" alt="Setup Gamer" title="Setup Gamer" />
      </div>
      <div class="carousel-item">
        <img src="https://i.pinimg.com/originals/61/b5/33/61b533e8092ebcec97e1ed4aa41decca.png" class="d-block w-100" alt="Setup Gamer" title="Setup Gamer" />
      </div>
    </div>

    <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </a>
  </div>

  <div id="partners">
    <h2>Parceiros</h2>
    <div class="row justify-content-between">
      <img class="col-md-3 col-sm-6 mt-4" src="assets/images/amd.png" alt="AMD" title="AMD" />
      <img class="col-md-3 col-sm-6 mt-4" src="assets/images/hyper.png" alt="HyperX" title="HyperX" />
      <img class="col-md-3 col-sm-6 mt-4" src="assets/images/nvidia.png" alt="Nvidia" title="Nvidia" />
      <img class="col-md-3 col-sm-6 mt-4" src="assets/images/samsung.png" alt="Samsung" title="Samsung" />
    </div>
  </div>
</main>

<footer id="footer">
  <div class="row">
    <div class="col-md-2">
      <ul>
        <li><a href="#" title="Zutto Esports"> Zutto Esports</a></li>
        <li><a href="#" title="Sobre nós"> Sobre nós</a></li>
        <li><a href="#" title="Contate-nos"> Contate-nos</a></li>
      </ul>
    </div>
    <div class="col-md-2">
      <ul>
        <li><a href="#" title="Jogos"> Jogos</a></li>
        <li><a href="#" title="League of Legends"> League of Legends</a></li>
        <li><a href="#" title="Valorant"> Valorant</a></li>
      </ul>
    </div>
    <div class="col-md-2">
      <ul>
        <li><a href="#" title="Conteúdos"> Conteúdos</a></li>
        <li><a href="#" title="Blog"> Blog</a></li>
        <li><a href="#" title="Vídeos"> Vídeos</a></li>
      </ul>
    </div>
  </div>
  <hr />
  <div class="infos">
    <div class="row">
      <ul class="terms col-md-4">
        <li class="mr-2"><a href="#" title="Termos de uso">Termos de uso</a></li>
        <li><a href="#" title="Política de privacidade">Política de privacidade</a></li>
      </ul>
      <a class="col-md-4 text-center" href="mailto:atendimento@zutto.com.br">atendimento@zutto.com.br</a>
      <address class="col-md-4 text-center">R. Padre José de Anchieta, 76 - Santo Amaro, São Paulo - SP</address>
    </div>
  </div>
</footer>

<div class="modal fade" id="entrarModal" tabindex="-1" aria-labelledby="entrarModal" aria-hidden="true">
  <form action="Controllers/UsersController.php" method="POST" class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="entrarModal">Entrar</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="loginForm">
          <div class="mb-3">
            <label for="username" class="form-label">Nome de usuário</label>
            <input type="text" class="form-control" name="username" id="username" required />
          </div>
          <div class="mb-3">
            <label for="password" class="form-label">Senha</label>
            <input type="password" class="form-control" name="password" id="password" required />
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <input type="submit" name="action" value="Logar" class="btn btn-primary" />
      </div>
    </div>
  </form>
</div>

<div class="modal fade" id="cadastrarModal" tabindex="-1" aria-labelledby="cadastrarModal" aria-hidden="true">
  <form action="Controllers/UsersController.php" method="POST" class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="cadastrarModal">Cadastrar</h5>
        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <div class="mb-3">
          <label for="username" class="form-label">Nome de usuário</label>
          <input type="text" class="form-control" id="username" name="username" required />
        </div>
        <div class="mb-3">
          <label for="fullname" class="form-label">Nome completo</label>
          <input type="text" class="form-control" id="fullname" name="fullname" required />
        </div>
        <div class="mb-3">
          <label for="registerEmail" class="form-label">Email</label>
          <input type="email" class="form-control" id="registerEmail" name="registerEmail" required />
        </div>
        <div class="mb-3">
          <label for="registerPassword" class="form-label">Senha</label>
          <input type="password" id="registerPassword" name="registerPassword" class="form-control" aria-describedby="passwordHelpBlock" onkeyup="checkPassword()" required />
          <div id="passwordHelpBlock" class="form-text">Sua senha deve ter de 8 a 20 caracteres.</div>
        </div>
        <div class="mb-3">
          <label for="confirmPassword" class="form-label">Confirmar Senha</label>
          <input type="password" id="confirmPassword" name="confirmPassword" class="form-control" aria-describedby="confirmPasswordText" onkeyup="checkPassword()" required />
          <div id="confirmPasswordText" class="form-text text-danger">Senhas não identicas.</div>
        </div>
        <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" name="terms" id="terms" required />
          <label class="form-check-label" for="terms">Aceitar termos e condições.</label>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        <input type="submit" name="action" value="Cadastrar" class="btn btn-primary" />
      </div>
    </div>
  </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="assets/script.js"></script>

</body>

</html>