@extends('layouts.app')

@section('content')
<h5>Comics List</h5>

@foreach ($comicsList as $comic)
    <li>{{$comic->title}}</li>


@endforeach

@endsection
