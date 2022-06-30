@extends('layouts.app')

@section('main_content')

    <h2>Dettagli:</h2>
    <ul>
        <li>
            <h3>{{ $current_comic->title }}</h3>
            <img src="{{ $current_comic->thumb }}" alt="">
            <p><b>Categoria:</b> {{ $current_comic->series }}</p>
            <p><b>Descrizione:</b> {{ $current_comic->description }}</p>
            <p><b>Data di pubblicazione:</b> {{ $current_comic->sale_date }}</p>
            <p><b>Tipo:</b> {{ $current_comic->type }}</p>
            <small><b>Prezzo:</b> €{{ $current_comic->price }}</small>
        </li>
    </ul>
    
@endsection