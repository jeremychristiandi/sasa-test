@extends('index')

@section('container')
<div>
    <h1>Product {{$product->id}}</h1>
    <form action="/products/{{$product->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Description</label>
            <input type="text" name="description" value="{{ old("description", $product->description) }}">
            </div>
            <div>
            <label for="">Category</label>
            <input disabled type="text" value="{{ optional($product->category)->description }}">
            <input type="hidden" name="category" value="{{$product->category->id}}">
            </div>
            <div>
            <label for="">Category</label>
            <input disabled type="text" value="{{ optional($product->jenis)->description }}">
            <input type="hidden" name="jenis" value="{{$product->jenis->id}}">
            </div>
            <div>
            <div>
            <label for="">Is active</label>
            <input type="number" name="isActive" value="{{ old("isActive", $product->isActive) }}">
            </div>
            <button type="submit">Edit</button>
        </form>
        <form action="/products/{{$product->id}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
        </form>
</div>
@endsection