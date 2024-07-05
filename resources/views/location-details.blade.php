@extends('index')

@section('container')
<div>
    <h1>Location {{$location->id}}</h1>
    <form action="/locations/{{$location->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{ old("description", $location->description) }}">
            </div>
            <div>
            <label for="">Is active</label>
            <input type="number" name="isActive" value="{{ old("isActive", $location->isActive) }}">
            </div>
            <button type="submit">Edit</button>
        </form>
        <form action="/locations/{{$location->id}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
        </form>
</div>
@endsection