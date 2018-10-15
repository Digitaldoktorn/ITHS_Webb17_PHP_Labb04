@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Genre</h1>
              <div class="card">
                  <div class="card-header">{{ $genre->genre }}</div>
                  <div class="card-body">
                    <ul>
                      @foreach($genre->media as $medium)
                      <hr>
                      <p><a href="{{ route('media.show', $medium) }}">{{$medium->title}}</a></p>
                      <p>ISBN: {{ $medium->ISBN }} </p>
                      <p>Author: {{ $medium->author }} </p>
                      @endforeach
                  </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
