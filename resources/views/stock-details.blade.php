@extends('index')

@section('container')
<div>
    <h1>Stock {{$stock->id}}</h1>
    <form action="/stocks/{{$stock->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Product</label>
            <input disabled type="text" value="{{ optional($stock->product)->description }}">
            <input type="hidden" name="product" value="{{$stock->product->id}}">
            </div>
            <div>
            <label for="">Category</label>
            <input disabled type="text" value="{{ optional($stock->category)->description }}">
            <input type="hidden" name="category" value="{{$stock->category->id}}">
            </div>
            <div>
            <label for="">Jenis</label>
            <input disabled type="text" value="{{ optional($stock->jenis)->description }}">
            <input type="hidden" name="jenis" value="{{$stock->jenis->id}}">
            </div>
            <div>
            <label for="">Location</label>
            <input disabled type="text" value="{{ optional($stock->location)->description }}">
            <input type="hidden" name="location" value="{{$stock->location->id}}">
            </div>
            <div>
            <label for="">Quantity</label>
            <input type="number" name="quantity" value="{{ $stock->quantity }}">
            <label for="">Is active</label>
            <input type="text" name="isActive" value="{{ $stock->isActive }}">
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