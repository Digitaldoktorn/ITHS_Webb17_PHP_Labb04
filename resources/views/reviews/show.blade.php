@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Reviews</h1>
              <div class="card">
                  <div class="card-header">{{ $review->title }}</div>
                  <div class="card-body">
                    <ul>
                    <li>Reviewer: {{ $review->name }} </li>
                    <li>Review: {{ $review->review }} </li>
                  </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
