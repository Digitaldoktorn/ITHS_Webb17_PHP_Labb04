@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Reviews</h1>
            @foreach ($reviews as $review)
              <div class="card" style="margin-top:20px;">
                  <div class="card-header"><span style="text-decoration:underline;">{{ $review->title }} </span> by {{ $review->name }}</div>
                  <div class="card-body"> 
                      {{ $review->review }}
                  </div>
              </div>
            @endforeach
            <br>
            {{ $reviews->links() }}
        </div>
    </div>
</div>
@endsection
