@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti:</h1>
    <ul>
        @foreach ($comics_list as $comic)
            <h3>
                Titolo: 
                <a href="">{{ $comic->title}}</a>
            </h3>
            <p><b>Categoria:</b> {{ $comic->series }}</p>
            <p><b>Descrizione:</b> {{ $comic->description }}</p>
            <p><b>Data:</b> {{ $comic->sale_date }}</p>
            <p><b>Tipo:</b> {{$comic->type}} </p>
            <small><b>Prezzo:</b> €{{$comic->price }}</small>
        @endforeach
    </ul>
@endsection