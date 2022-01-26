<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.css">
  <title>Movimentação</title>
</head>

<body>
  <div class="ui container">
    <div class="ui grid" style="margin-top: 2rem;">
      <div class="two column row">
        <div class="column">
          <h1 class="ui header">@yield('titulo')</h1>
        </div>
        <div class="column">
          <a href="{{ route('create') }}" class="ui inverted green button right floated">Adicionar</a>
          <a href="{{ route('index') }}" class="ui inverted primary button right floated">Home</a>
        </div>
      </div>
    </div>


    <div class="ui divider"></div>

    @yield('conteudo')
  </div>

  <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/semantic-ui@2.4.2/dist/semantic.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.0/jquery.mask.min.js"></script>

  @yield('script')
</body>

</html>