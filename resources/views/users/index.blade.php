@extends('layouts.app')

@section('content')

<div class="d-flex justify-content-between mb-3">

    <h3>Users</h3>

    <a href="#" class="btn btn-primary">
        Add User
    </a>

</div>

<table class="table table-bordered">

<thead>

<tr>

<th>ID</th>

<th>Name</th>

<th>Email</th>

</tr>

</thead>

<tbody>

@foreach($users as $user)

<tr>

<td>{{ $user->id }}</td>

<td>{{ $user->name }}</td>

<td>{{ $user->email }}</td>

</tr>

@endforeach

</tbody>

</table>

{{ $users->links() }}

@endsection