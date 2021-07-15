@extends('layout.app')

@section('content')

<h1>Comics</h1>

@foreach ($comics as $comic)
    <h1>{{$comic->title}}</h1>
    <a href="{{route('comics.show', $comic->id)}}">vai</a>
@endforeach

<a href="{{route('comics.create')}}">Vai nel pannello di controllo</a>

@endsection