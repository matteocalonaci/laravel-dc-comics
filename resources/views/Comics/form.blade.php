@extends('layouts.app')

@section('content')

<h2>Crea un nuovo fumetto</h2>
<form>
    @csrf
    <div class="mb-2">
        <label for="title" class="form-label p-2">Titolo:</label>
        <input type="text" class="form-control" name="title" id="title">
    </div>
    <div class="mb-2">
        <label for="description" class="form-label p-2">Descrizione:</label>
        <input type="text" class="form-control" name="description" id="description">
    </div>
    <div class="mb-2">
        <label for="thumb" class="form-label p-2">Immagine:</label>
        <input type="text" class="form-control" name="thumb" id="thumb">
    </div>
    <div class="mb-2">
        <label for="price" class="form-label p-2">Prezzo:</label>
        <input type="text" class="form-control" name="price" id="price">
    </div>
    <div class="mb-2">
        <label for="series" class="form-label p-2">Serie:</label>
        <input type="text" class="form-control" name="series" id="series">
    </div>
    <div class="mb-2">
        <label for="sale_date" class="form-label p-2">Date di uscita:</label>
        <input type="text" class="form-control" name="sale_date" id="sale_date">
    </div>
    <div class="mb-2">
        <label for="type" class="form-label p-2">Tipo:</label>
        <input type="text" class="form-control" name="type" id="type">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>

  </form>

@endsection
