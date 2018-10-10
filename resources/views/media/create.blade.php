@extends('layouts.app')

@section('content')
<form action="{{ route('media.store') }}" method="post">{{ csrf_field() }}

<label for="title">Title</label>
<input type="text" name="title">
<label for="author">Author</label>
<input type="text" name="author">
<label for="genre">Genre</label>
<input type="text" name="genre">
<label for="ISBN">ISBN</label>
<input type="text" name="ISBN">
<button type="submit">Create</button>
</form>
@endsection
