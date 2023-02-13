@extends('layout.app')

@section('title','Edição')

@section('content')

    <div class="container mt-5">
        <h1>Editar Jogo</h1>
        <hr>
        <form action="{{ route('jogos-update', ['id'=>$jogos->id]) }}" method="post">
        @csrf
        @method('put')
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" value="{{ $jogos->nome }}" placeholder="Digite o seu nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" value="{{ $jogos->categoria }}" placeholder="Digite a categoria">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Ano de Criação:</label>
                    <input type="text" class="form-control" name="ano_criação" value="{{ $jogos->ano_criação }}" placeholder="Digite o ano de criação">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Valor:</label>
                    <input type="number" class="form-control" name="valor" value="{{ $jogos->valor }}" placeholder="Digite o seu valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name=submit class="btn btn-success" value="Atualizar">
                </div>
            </div>
        </form>
    </div>
    
@endsection