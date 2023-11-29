@extends('layouts.app')

<title> Lab Act 1: Create Category </title>
@endsection

@section('content')

<form action="{{ url('/submit') }}" method="POST" enctype="multipart/form-data">

    @if(count($errors))
        <div class="alert alert-danger">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{$error}}</li>
                @endforeach
            </ul>
        </div>
    @endif

<h1> Create Category </h1>
    {{ csrf_field() }}
    <div class="row my-3">
        <div class="col-md-12 my-2">
            <label> Name: </label>
            <input type="text" name="cat_name" id="#" class="form-control">
        </div>
        <div class="col-md-12 my-2">
            <label> Description: </label>
            <input type="text" name="cat_desc" id="#" class="form-control">
        </div>
        <div class="col-md-12 my-2">
            <label for="image">Image:</label>
            <input type="file" name="cat_image" id="#" class="form-control">
        </div>
        <div class="col-md-12 my-4">
            <button type="submit" class="btn btn-dark w-100"> Submit </button>
        </div>
    </div>

</form>

@endsection
