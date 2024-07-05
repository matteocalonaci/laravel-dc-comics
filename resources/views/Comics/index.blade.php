@extends('layouts.app')

@section('content')
<h2>Comics List Details</h2>
<div class="card_container">

@foreach ($comicsList as $comic)
<div class="card" style="height: 42rem; padding-bottom: 9rem;
">
    <div class="img_container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <ul>
    <li>Titolo: {{$comic["title"]}}</li>
    <li>Descrizione: {{$comic["description"]}}</li>
    <li>Serie: {{$comic["series"]}}</li>
    <li>Tipo: {{$comic["type"]}}</li>
    <li>Data di pubblicazione: {{$comic["sale_date"]}}</li>
    <li class="price">Prezzo: {{$comic["price"]}}</li>
    </ul>
</div>

@endforeach
</div>
@endsection


