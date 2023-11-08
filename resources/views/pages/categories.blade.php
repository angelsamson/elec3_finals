@extends('layouts.app')

@section('title')
<title> Lab Act 1: Categories </title>
@endsection

@section('content')
@if(session('status'))
<div class="alert alert-success">
    {{ session('status') }}
</div>
@endif
<h1> Categories </h1>

<table class="table table-striped">
    <thead class="table-dark text-dark">
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Description</th>
            <th scope="col">Created At</th>
            <th scope="col">Updated At</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach($categories as $cat)
        <tr>
            <td>{{ $cat->id }}</td>
            <td>{{ $cat->name }}</td>
            <td>{{ $cat->description }}</td>
            <td>{{ $cat->created_at}}</td>
            <td>{{ $cat->updated_at}}</td>
            <td><a href="/categories/{{ $cat->id }}" class="btn btn-primary" type="button">View Record</a></td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection