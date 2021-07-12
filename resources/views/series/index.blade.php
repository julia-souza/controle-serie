@extends('layout')

@section('cabecalho')
    
    Séries

@endsection


@section('conteudo')
    
    {{--  <a href="/series/criar" class="btn btn-dark mb-2"> Adicionar </a>  --}}

    <ul class="list-group">
        {{--  @foreach ($series as $series)
            <li class="list-group-item"> {{ $serie->nome }}</li>
        @endforeach  --}}

       <?php 
            foreach ($series as $serie): ?>
                <li class="list-group-item"><?= $serie; ?></li>
                
        <?php endforeach; ?> 
     
    </ul>

@endsection
   