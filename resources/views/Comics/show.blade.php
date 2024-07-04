@extends('layouts.app')

@section('content')
<h5>Comics List</h5>


    <p>Titolo: {{$comic->title}}</p>
    <p>Descrizione: {{$comic->description}}</p>



@endsection
