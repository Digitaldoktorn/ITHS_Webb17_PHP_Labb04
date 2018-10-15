@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Reviews</h1>
            @foreach ($reviews as $review)
              <div class="card">
                  <div class="card-header">{{ $review->name }}</div>
                  <div class="card-body">
                    {{ $review->title }}, {{ $review->review }}

                  </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
