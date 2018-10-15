@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Medium</h1>
              <div class="card">
                  <div class="card-header">{{ $medium->title }}</div>
                  <div class="card-body">
                    <ul>
                    <li>ISBN: {{ $medium->ISBN }} </li>
                    <li>Author: {{ $medium->author }} </li>
                    <li>Genre: {{ $medium->genre }} </li>
                    <div>Reviews</div>
                    <ol>
                    @foreach($medium->reviews as $review)
                      <li>
                    <div>Reviewer: {{ $review->name }}</div>
                    <div>Review: {{ $review->review }}</div>
                    </li>
                    @endforeach
                    </ol>
                  </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
