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
                  </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
