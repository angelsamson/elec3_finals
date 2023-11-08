@extends('layouts.app')

@section('title')
<title> Lab Act 1: Create Category </title>
@endsection

@section('content')

<form method="POST" action="{{ url('/submit') }}">
    <h1> Create Category </h1>
    @csrf
    <div class="row my-3">
        <div class="col-md-12 my-2">
            <label> Name: </label>
            <input type="text" name="cat_name" id="#" class="form-control" required>
        </div>
        <div class="col-md-12 my-2">
            <label> Description: </label>
            <input type="text" name="cat_desc" id="#" class="form-control" required>
        </div>
        <div class="col-md-12 my-4">
            <button type="submit" class="btn btn-dark w-100"> Submit </button>
        </div>
    </div>
    
</form>

@endsection