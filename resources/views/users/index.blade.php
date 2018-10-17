@extends('home')

@section('content')

<div class="row">
    <div class="col-md-12">
        <br />
        <h3 align="center">Users</h3>
        <table>
        <thead>
        <tr>
            <th class="fluid" style="background-color:grey;">Users registered</th>
        </tr>
    </thead>
       @foreach ($users as $user)
       <tr>
       <th>{{ $user->name }} </th>
       </tr>
       @endforeach

       </table>
       <br>
            {{ $users->links() }}
    </div>
</div>

@endsection

<style>
table {
    border-collapse: collapse;
}
th, td {
    border: solid 1px #CCC;
    padding: 10px;
}
.fixed {
    max-width: 300px;
	  min-width: 300px;
}
.fluid {
		width: 50%;
}</style>
