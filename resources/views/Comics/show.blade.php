@extends('layouts.app')

@section('content')
<h2>Comics Single Card Details</h2>
<div class="card_container">

<div class="card" style="height: 60rem; padding-bottom: 9rem;
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
</div>


</div>
@endsection


