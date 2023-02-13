@extends('layout.app')

@section('title','Criação')

@section('content')

    <div class="container mt-5">
        <h1>Crie um novo Jogo</h1>
        <hr>
        <form action="{{ route('jogos-store') }}" method="post">
        @csrf
            <div class="form-group">
                <div class="form-group">
                    <label for="nome">Nome:</label>
                    <input type="text" class="form-control" name="nome" placeholder="Digite o seu nome">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Categoria:</label>
                    <input type="text" class="form-control" name="categoria" placeholder="Digite a categoria">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Ano de Criação:</label>
                    <input type="text" class="form-control" name="ano_criação" placeholder="Digite o ano de criação">
                </div>
                <br>
                <div class="form-group">
                    <label for="nome">Valor:</label>
                    <input type="number" class="form-control" name="valor" placeholder="Digite o seu valor">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" name=submit class="btn btn-primary">
                </div>
            </div>
        </form>
    </div>
    
@endsection