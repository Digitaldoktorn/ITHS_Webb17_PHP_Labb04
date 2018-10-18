@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Books</h1>

            @foreach ($media as $medium)
              <div class="card"  style="margin-top:20px;">
                  <div class="card-header"><a href="{{ route('media.show', $medium) }}">
                  {{ $medium->title }}
                  </a></div>
                  <div class="card-body">
                    {{ $medium->ISBN }}, {{ $medium->author }}, {{ $medium->genre }}
                    <form action="{{ route('media.destroy',$medium) }}" method="POST" style="float:right;">

                        <a class="btn btn-info" href="{{ route('media.show',$medium) }}">Show</a>

                        <a class="btn btn-primary" href="{{ route('media.edit',$medium) }}">Edit</a>

                        @csrf

                        @method('DELETE')

                        <button type="submit" class="btn btn-danger">Delete</button>

                    </form>

                  </div>
              </div>
              @if (Auth::user() && Auth::user()->type == 'admin')
              <td>

 

</td>
@endif
            @endforeach
            <br>
            {{ $media->links() }}
        </div>

    </div>
</div>
@endsection
