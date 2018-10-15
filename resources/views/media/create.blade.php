@extends('layouts.app')

@section('content')
{!! Form::open(['route' => 'media.store']) !!}

            <div class="form-group">
                {!! Form::label('title', 'title') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('author', 'author') !!}
                {!! Form::text('author', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('genre', 'genre') !!}
                {!! Form::text('genre', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('ISBN', 'ISBN') !!}
                {!! Form::text('ISBN', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('Add this book', ['class' => 'btn btn-info']) !!}

            {!! Form::close() !!}

@endsection
