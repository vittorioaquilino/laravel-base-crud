@extends('layouts.app')

@section('main_content')
        <h1>Modifica Comic</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('comics.update', ['comic' => $comic_to_update->id]) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group mb-3">
                <label for="title">Titolo</label>
                <input type="text" class="form-control" name="title" id="title"
                value="{{ old('title') ? old('title') : $comic_to_update->title }}">
            </div>
            <div class="form-group mb-3">
                <label for="series">Categoria</label>
                <input type="text" class="form-control" name="series" id="series"
                value="{{ old('series') ? old('series') : $comic_to_update->series }}">
            </div>
            <div class="form-group mb-3">
                <label for="thumb">Immagine</label>
                <input type="text" class="form-control" name="thumb" id="thumb"
                value="{{ old('thumb') ? old('thumb') : $comic_to_update->thumb }}">
            </div>
            <div class="form-group mb-3">
                <label for="description">Descrizione</label>
                <input type="text" class="form-control" name="description" id="description"
                value="{{ old('description') ? old('description') : $comic_to_update->description }}">
            </div>
            <div class="form-group mb-3">
                <label for="sale_date">Data pubblicazione</label>
                <input type="text" class="form-control" name="sale_date" id="sale_date"
                value="{{ old('sale_date') ? old('sale_date') : $comic_to_update->sale_date }}">
            </div>
            <div class="form-group mb-3">
                <label for="type">Tipologia</label>
                <input type="text" class="form-control" name="type" id="type"
                value="{{ old('type') ? old('type') : $comic_to_update->type }}">
            </div>
            <div class="form-group mb-3">
                <label for="price">Prezzo</label>
                <input type="text" class="form-control" name="price" id="price"
                value="{{ old('price') ? old('price') : $comic_to_update->price }}">
            </div>
            <button type="submit" class="btn btn-primary">Conferma</button>
        </form>
@endsection