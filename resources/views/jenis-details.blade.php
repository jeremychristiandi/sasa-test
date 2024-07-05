@extends('index')

@section('container')
<div>
    <h1>Jenis {{$jenis->id}}</h1>
    <form action="/jenis/{{$jenis->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{ old("description", $jenis->description) }}">
            </div>
            <div>
            <label for="">Category</label>
            <input disabled type="text" value="{{ optional($jenis->category)->description }}">
            <input type="hidden" name="category" value="{{$jenis->category->id}}">
            </div>
            <div>
            <label for="">Is active</label>
            <input type="number" name="isActive" value="{{ old("isActive", $jenis->isActive) }}">
            </div>
            <button type="submit">Edit</button>
        </form>
        <form action="/jenis/{{$jenis->id}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
        </form>
</div>
@endsection