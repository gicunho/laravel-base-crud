@extends('layout.app')

@section('content')

<h1>Comics</h1>


    <h1>{{$comic->title}}</h1>
    <h2>asd</h2>

    <form action="{{route('comics.destroy', $comic->id)}}" method="post">
    @csrf
    @method('DELETE')
    <button type="submit" class="btn btn-danger">Delete</button>
</form>
@endsection