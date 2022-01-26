@extends('layout')

@section('titulo', 'Todas as movimentações')

@section('conteudo')
@php
  $total = 0;
@endphp

  <table class="ui celled table">
    <thead>
      <tr>
        <th>Nome</th>
        <th>Valor</th>
        <th>Tipo de movimentação</th>
        <th>Data de criação</th>
        <th>Última atualização</th>
        <th>Editar</th>
        <th>Deletar</th>
      </tr>
    </thead>
    <tbody>
      @foreach($movimentacoes as $movimentacao)
        <tr class="{{$movimentacao->tipo == 1 ? "positive" : "negative"}}">
          <td data-label="Nome">{{$movimentacao->nome}}</td>
          <td data-label="Valor">R$ {{number_format(floatval($movimentacao->valor), 2)}}</td>
          <td data-label="Tipo de movimentação">{{$movimentacao->tipo == 1 ? "Entrada" : "Saída"}}</td>
          <td data-label="Data de criação">{{$movimentacao->data_criacao}}</td>
          <td data-label="Última atualização">{{$movimentacao->data_atualizacao}}</td>
          <td data-label="Editar"><a href="{{ route('edit', $movimentacao->id) }}" class="ui inverted brown button">Editar</a></td>
          <td data-label="Deletar">
            <form action="{{ route('destroy', $movimentacao->id) }}" method="POST" onsubmit="return confirm('Deseja realmente deletar?');">
              @csrf
              @method('DELETE')
              <button type="submit" class="ui inverted red button">Deletar</button>
            </form>
          </td>
        </tr>
        @php
          $movimentacao->tipo == 1 ? $total += $movimentacao->valor : $total -= $movimentacao->valor;
        @endphp
      @endforeach
    </tbody>
  </table>
  @if($total == 0)
    <h3 class="ui right aligned header yellow">Total: R$ {{number_format(floatval($total), 2)}}</h3>
  @elseif($total < 0)
    <h3 class="ui right aligned header red">Total: R$ {{number_format(floatval($total), 2)}}</h3>
  @elseif($total > 0)
    <h3 class="ui right aligned header green">Total: R$ {{number_format(floatval($total), 2)}}</h3>
  @endif
  
  

@endsection