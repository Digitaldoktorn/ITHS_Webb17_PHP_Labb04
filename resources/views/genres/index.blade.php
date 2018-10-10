@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Genres</h1>
            @foreach ($genres as $genre)
              <div class="card">
                  <div class="card-header">{{ $genre->genre }}</div>

              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
