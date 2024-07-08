@extends('layouts.app')

@section('content')

<h2>Modifica: {{$comic->title}}</h2>
<form method="POST" action="{{ route("comics.update", $comic->id) }}">
    @method('PUT')
    @csrf
    <div class="form-container" action="">
    <div class="m-4">
        <label for="title" class="form-label p-2" >Titolo:</label>
        <input type="text" class="form-control w-100" name="title" id="title" value="{{$comic->title}}">
    </div>
    <div class="m-4">
        <label for="description" class="form-label p-2">Descrizione:</label>
        <input type="text" class="form-control w-100" name="description" id="description" value="{{$comic->description}}">
    </div>
    <div class="m-4">
        <label for="thumb" class="form-label p-2">Immagine:</label>
        <input type="text" class="form-control w-100" name="thumb" id="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="m-4">
        <label for="price" class="form-label p-2">Prezzo:</label>
        <input type="text" class="form-control w-100" name="price" id="price" value="{{$comic->price}}">
    </div>
    <div class="m-4">
        <label for="series" class="form-label p-2">Serie:</label>
        <input type="text" class="form-control w-100" name="series" id="series" value="{{$comic->series}}">
    </div>
    <div class="m-4">
        <label for="sale_date" class="form-label p-2">Date di uscita:</label>
        <input type="text" class="form-control w-100" name="sale_date" id="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="m-4">
        <label for="type" class="form-label p-2">Tipo:</label>
        <input type="text" class="form-control w-100" name="type" id="type" value="{{$comic->type}}">
    </div>

    </div>

    <button type="submit" class="btn btn-primary m-4">MODIFICA</button>

  </form>

@endsection
