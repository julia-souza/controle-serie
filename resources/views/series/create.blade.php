@extends('layout')

@section('cabecalho')
    
    Adicionar Série

@endsection

@section('conteudo')
    @csrf
    <form method="post">
        <div class="form-group">
            <label for="nome">Título da Série</label>
            <input type="text" name="nome" id="nome" class="form-control">
        </div>
        <button style='margin-top: 10px;' class="btn btn-primary"> Adicionar </button>
    </form>
    
@endsection
