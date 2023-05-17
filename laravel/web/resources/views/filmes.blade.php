@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista de Filmes Favoritos</h1>
        <ul>
            @foreach($filmes as $filme)
                <li>{{ $filme['titulo'] }} - {{ $filme['ano'] }} - {{ $filme['genero'] }}</li>
            @endforeach
        </ul>
    </div>
@endsection