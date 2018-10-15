@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Users</h1>

            @foreach ($users as $user)
              <div class="card">

                  {{ $user->name }}
                  </a></div>
                  <div class="card-body">
                    {{ $user->email }}, {{ $user->password }}
                  </div>
              </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
