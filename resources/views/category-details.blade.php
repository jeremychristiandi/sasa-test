@extends('index')

@section('container')
<div>
    <h1>Category {{$category->id}}</h1>
    <form action="/categories/{{$category->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{ old("description", $category->description) }}">
            </div>
            <div>
            <label for="">Is active</label>
            <input type="number" name="isActive" value="{{ old("isActive", $category->isActive) }}">
            </div>
            <button type="submit">Edit</button>
        </form>
        <form action="/categories/{{$category->id}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
        </form>
</div>
@endsection