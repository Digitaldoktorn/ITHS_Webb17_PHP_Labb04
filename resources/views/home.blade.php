@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                <a style="color:white;" href="{{ url('genres') }}">Genres</a>
                <div class="card-body">
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in! -->
                    @if (Auth::user() && Auth::user()->type == 'admin')
                        <a style="color:white;" href="{{ url('/users') }}">
                            <button class="btn btn-primary" style="">Check users</button>
                        </a>
                        
                    @endif

                    <!-- Anders comment: now admin can also see genres, books and reviews -->
                    @if (Auth::user())
                        <br><br>
                        <div class="row">
                            <div class="col">
                                <a style="color:white;" href="{{ url('genres') }}">
                                    <button class="btn btn-primary" style="">Genres</button>
                                </a>

                                <a style="color:white;" href="{{ url('/media') }}">
                                    <button class="btn btn-primary" style="">Books</button>
                                </a>
                                
                                <a style="color:white;" href="{{ url('/reviews') }}">
                                    <button class="btn btn-primary" style="">Reviews</button>
                                </a>
                                
                            </div>
                        </div>
                    @endif
 



                </div>
            </div>
        </div>
    </div>
</div>
@endsection
