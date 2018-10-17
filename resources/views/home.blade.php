@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                    @if (Auth::user() && Auth::user()->type == 'admin')
                        <button class="btn btn-primary" style="">
                            <a style="color:white;" href="{{ url('/users') }}">check users</a>
                        </button>
                    @endif

                    @if (Auth::user() && Auth::user()->type == '')
                        <div class="row">
                            <div class="col">
                                <button class="btn btn-primary" style="">
                                    <a style="color:white;" href="{{ url('/genres') }}">check Genres</a>
                                </button>
                            </div>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
