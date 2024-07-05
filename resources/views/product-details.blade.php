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
            <label for="category">Category</label>
            <select name="category" id="category">
                @foreach($categories as $c)
                @if($c->isActive == 1)
                <option value="{{$c->id}}">{{$c->description}}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div>
            <label for="jenis">Group</label>
            <select name="jenis" id="jenis">
                @foreach($jenis as $j)
                @if($j->isActive == 1)
                <option value="{{$j->id}}">{{$j->description}}</option>
                @endif
                @endforeach
            </select>
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