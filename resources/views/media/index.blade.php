@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Books</h1>

            @foreach ($media as $medium)
              <div class="card">
                  <div class="card-header"><a href="{{ route('media.show', $medium) }}">
                  {{ $medium->title }}
                  </a></div>
                  <div class="card-body">
                    {{ $medium->ISBN }}, {{ $medium->author }}, {{ $medium->genre }}

                  </div>
              </div>
            @endforeach
            <br>
            {{ $media->links() }}
        </div>
        
    </div>
</div>
@endsection
