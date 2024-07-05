@extends('layouts.app')
@section('content')
<h2>Comics List</h2>
<div class="card_container">

@foreach ($comicsList as $comic)
<div class="card" >
    <div class="img_container">
        <img src="{{$comic['thumb']}}" alt="">
    </div>
    <ul>
    <li class="mt-4" style="text-align: center">Titolo: {{$comic["title"]}}</li>
    </ul>
</div>

@endforeach
</div>
@endsection


