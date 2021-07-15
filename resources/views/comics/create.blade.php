@extends('layout.app')

@section('content')

<h1>Add a new Comic</h1>


<form action="{{ route('comics.store') }}" method="post">
    @csrf
    {{-- title, description, cover, series, price --}}
    <div class="form-group">
      <label for="title">Title</label>
      <input type="text" name="title" id="title" class="form-control" placeholder="add a title" aria-describedby="titleHelper">
      <small id="titleHelper" class="text-muted">Type a title max 100 characters</small>
    </div>
    <div class="form-group">
        <label for="description">Description</label>
        <textarea name="description" id="description" rows="5"></textarea>
    </div>
    <div class="form-group">
        <input type="number" name="price" id="price">
    </div>
    <div class="form-group">
        <input type="number" name="page_count" id="page_count">
    </div>
    <div class="form-group">
        <label for="author">author</label>
        <textarea name="author" id="author" rows="5"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection