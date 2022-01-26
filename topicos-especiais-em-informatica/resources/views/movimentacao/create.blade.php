@extends('layout')

@section('titulo', 'Criar movimentação')

@section('conteudo')

  <form class="ui form" action="{{route('store')}}" method="POST">
    @method('POST')
    @csrf
    <div class="field">
      <label>Nome</label>
      <input type="text" name="nome" placeholder="Nome" required>
    </div>

    <div class="field">
      <label>Valor</label>
      <input type="text" name="valor" id="valor" step="0.01" placeholder="Valor" required>
    </div>

    <div class="inline fields">
      <label for="tipo">Tipo de movimentação:</label>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="tipo" checked="" id="entrada" value="1">
          <label for="entrada">Entrada</label>
        </div>
      </div>
      <div class="field">
        <div class="ui radio checkbox">
          <input type="radio" name="tipo" id="saida" value="0">
          <label for="saida">Saida</label>
        </div>
      </div>
    </div>

    <button class="ui inverted green button" type="submit">Adicionar</button>
  </form>

@endsection

@section('script')
  <script>
    $('#valor').mask('000.000.000,00', {reverse: true});
  </script>
@endsection