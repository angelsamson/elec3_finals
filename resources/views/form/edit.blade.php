@extends('layouts.app')

@section('title')
<title> Lab Act 1: Create Category </title>
@endsection

@section('content')

<form method="POST" action="{{ url('edit-category/'.$item->id) }}" enctype="multipart/form-data">

    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <h1> Edit Category </h1>
    {{ csrf_field() }}
    @method('PUT')
    <div class="row my-3">
        <div class="col-md-12 my-2">
            <label> Name: </label>
            <input type="text" name="cat_name" id="#" class="form-control" value="{{ $item->name }}">
        </div>
        <div class="col-md-12 my-2">
            <label> Description: </label>
            <input type="text" name="cat_desc" id="#" class="form-control" value="{{ $item->description }}">
        </div>
        <div class="form col-md-6">
            <label for="preview">Preview of Current Image:</label>
            <img src="{{ asset('storage/category/'.$item->image) }}" width=170>
            <label for="image">Upload New Image:</label>
            <input type="file" name="cat_image" id="#" class="form-control" accept="image/*">
        </div>
        <div class="col-md-12 my-4">
            <button type="submit" class="btn btn-success w-100"> Update Record </button>
        </div>
    </div>
    
</form>

@endsection