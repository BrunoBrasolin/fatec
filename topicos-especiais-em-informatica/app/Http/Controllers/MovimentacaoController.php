<?php

namespace App\Http\Controllers;

use App\Models\Movimentacao;
use Brick\Math\Exception\IntegerOverflowException;
use Carbon\Carbon;
use Illuminate\Http\Request;

class MovimentacaoController extends Controller
{
    public function index()
    {
        return view('movimentacao.index', ['movimentacoes' => Movimentacao::all()]);
    }

    public function create()
    {
        return view('movimentacao.create');
    }

    public function store(Request $request)
    {
        $request->request->add(['data_criacao' => Carbon::now('America/Sao_Paulo'), 'data_atualizacao' => Carbon::now('America/Sao_Paulo')]);
        
        $movimentacao = new Movimentacao($request->all());
        $movimentacao->save();

        return redirect()->route('index');
    }

    public function edit(int $id)
    {
        return view('movimentacao.edit', ['movimentacao' => Movimentacao::findOrFail($id)]);
    }

    public function update(Request $request, int $id)
    {
        $request->request->add(['data_atualizacao' => Carbon::now('America/Sao_Paulo')]);

        Movimentacao::findOrFail($id)->update($request->all());
        
        return redirect()->route('index');
    }

    public function destroy(int $id)
    {
        Movimentacao::destroy($id);
        return redirect()->route('index');
    }
}
