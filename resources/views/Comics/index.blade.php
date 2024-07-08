@extends('layouts.app')

@section('content')
<h2>Comics List Details</h2>
<div class="card_container">

@foreach ($comicsList as $comic)
<div class="card" style="height: 65rem; padding-bottom: 9rem;
">
    <div class="img_container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <ul>
    <li class="mt-4">Titolo: {{$comic["title"]}}</li>
    <li>Descrizione: {{$comic["description"]}}</li>
    <li>Serie: {{$comic["series"]}}</li>
    <li>Tipo: {{$comic["type"]}}</li>
    <li>Data di pubblicazione: {{$comic["sale_date"]}}</li>
    <li class="price">Prezzo: {{$comic["price"]}}</li>
    </ul>
    <div class="card-footer text-center">
        <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-primary p-1">Vai ai dettagli</a>
        <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-warning p-1">Modifica</a>
        <form action="{{ route('comics.destroy', $comic->id) }}" method="POST
            " class="d-inline">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger p-1">Elimina</button>
            </form>
    </div>
</div>

@endforeach
</div>
@endsection


