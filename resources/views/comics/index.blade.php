@extends('layouts.app')

@section('main_content')
    <h1>Lista dei fumetti:</h1>
    <ul>
        @foreach ($comics_list as $comic)
        <li>
            <h3>
                Titolo: 
                <a href="{{ route('comics.show', ['comic' => $comic->id]) }}">{{ $comic->title}}</a>
            </h3>
            <p><b>Categoria:</b> {{ $comic->series }}</p>
            <p><b>Descrizione:</b> {{ $comic->description }}</p>
            <p><b>Data pubblicazione:</b> {{ $comic->sale_date }}</p>
            <p><b>Tipo:</b> {{$comic->type}} </p>
            <small><b>Prezzo:</b> €{{$comic->price }}</small>
        </li>
        @endforeach
    </ul>
@endsection