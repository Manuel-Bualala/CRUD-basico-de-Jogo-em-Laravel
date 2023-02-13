<?php

namespace App\Http\Controllers;

use App\Models\Jogo;
use Illuminate\Http\Request;

class JogosControler extends Controller
{
    public function index(){
        $jogos = Jogo::all();
        //dd($jogos);
        return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create(){
        // Retorna view de criação(jogo)
        return view('jogos.create');
    }

    public function store(Request $Request){
        Jogo::create($Request->all());
        return redirect()->route('jogos-index');
    }

    public function edit($id){
        $jogos = Jogo::where('id', $id)->first();
        if(!empty($jogos)){
            return view('jogos.edit', ['jogos'=>$jogos]);
        }else{
            return redirect()->route('jogos-index');
        }
    }

    public function update(Request $Request, $id){
        $data = [
            'nome' => $Request->nome,
            'categoria' => $Request->categoria,
            'ano_criação' => $Request->ano_criação,
            'valor' => $Request->valor,
        ];
        Jogo::where('id',$id)->update($data);
        return redirect()->route('jogos-index');
    }

    public function destroy($id){
        Jogo::where('id',$id)->delete();
        return redirect()->route('jogos-index');
    }
}
