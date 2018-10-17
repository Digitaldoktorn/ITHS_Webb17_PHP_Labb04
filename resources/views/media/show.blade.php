@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Book</h1>
              <div class="card">
                  <div class="card-header">{{ $medium->title }}</div>
                  <div class="card-body">
                    <ul>
                    <li>ISBN: {{ $medium->ISBN }} </li>
                    <li>Author: {{ $medium->author }} </li>
                    <li>Genre: {{ $medium->genre }} </li>
                    <!-- <li>Status: {{ $medium->status }} </li> -->

                    <div>Reviews</div>
                    <ol>
                    @foreach($medium->reviews as $review)
                      <li>
                    <div>Reviewer: {{ $review->name }}</div>
                    <div>Review: {{ $review->review }}</div>
                    </li>
                    @endforeach

                    </ol>
                    <br>

                    {!! Form::open(['route' => ['media.update', $medium->media_id ]]) !!}
                    {{Form::hidden('status', 'not-available', ['class' => 'form-control'])}}
                    <!-- {{Form::text('id', $medium->media_id, ['class' => 'form-control'])}} -->
                    {{method_field('PUT')}}
                    {{csrf_field()}}
                    <!-- {{Form::submit('Reserve', ['class'=>'btn btn-primary'])}} -->

                    {!! Form::close() !!}
                       
                        </ul>

                    </ol>
                  </ul>
                  </div>
              </div>
        </div>
    </div>
</div>
@endsection
