@extends('layouts.app')

@section('title')
<title> Lab Act 1: Create Category </title>
@endsection

@section('content')

<form method="POST" action="{{ url('edit-category/'.$item->id) }}">
    <h1> Edit Category </h1>
    @csrf
    @method('PUT')
    <div class="row my-3">
        <div class="col-md-12 my-2">
            <label> Name: </label>
            <input type="text" name="cat_name" id="#" class="form-control" value="{{ $item->name }}" required>
        </div>
        <div class="col-md-12 my-2">
            <label> Description: </label>
            <input type="text" name="cat_desc" id="#" class="form-control" value="{{ $item->description }}" required>
        </div>
        <div class="col-md-12 my-4">
            <button type="submit" class="btn btn-success w-100"> Update Record </button>
        </div>
    </div>
    
</form>

@endsection