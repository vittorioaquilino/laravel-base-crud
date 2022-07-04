@extends('layouts.app')

@section('main_content')
<div class="container">
    <h1>Crea un nuovo Comic</h1>
    <form action="{{ route('comics.store') }}" method="post">
        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ old('title') }}">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Categoria</label>
            <input type="text" class="form-control" id="series" name="series" value="{{ old('series') }}">
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Immagine</label>
            <input type="text" class="form-control" id="thumb" name="thumb" value="{{ old('thumb') }}">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione</label>
            <textarea type="text" class="form-control" id="description" name="description" value="{{ old('description') }}"></textarea>
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data pubblicazione</label>
            <input type="text" class="form-control" id="sale_date" name="sale_date" value="{{ old('sale_date') }}">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Tipo</label>
            <input type="text" class="form-control" id="type" name="type" value="{{ old('type') }}">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="text" class="form-control" id="price" name="price" value="{{ old('price') }}">
        </div>

        <button type="submit" class="btn btn-primary">Crea comic</button>
    </form>
</div>
@endsection