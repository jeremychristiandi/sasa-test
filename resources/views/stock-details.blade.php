@extends('index')

@section('container')
<div>
    <h1>Stock {{$stock->id}}</h1>
    <form action="/stocks/{{$stock->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Product</label>
            <input type="text" name="product" value="{{ old("product_id", optional($stock->product)->description) }}">
            </div>
            <div>
            <label for="">Category</label>
            <input type="text" name="category" value="{{ old("category_id", optional($stock->category)->description) }}">
            </div>
            <div>
            <div>
            <label for="">Jenis</label>
            <input type="text" name="jenis" value="{{ old("jenis_id", optional($stock->jenis)->description) }}">
            </div>
            <div>
            <div>
            <label for="">Location</label>
            <input type="text" name="location" value="{{ old("location_id", optional($stock->location)->description) }}">
            </div>
            <div>
            <label for="">Quantity</label>
            <input type="number" name="quantity" value="{{ old("quantity", $stock->quantity) }}">
            <label for="">Is active</label>
            <input type="number" name="isActive" value="{{ old("isActive", $stock->isActive) }}">
            </div>
            <button type="submit">Edit</button>
        </form>
        <form action="/stocks/{{$stock->id}}" method="post">
        @csrf
        @method("delete")
        <button type="submit">Delete</button>
        </form>
</div>
@endsection