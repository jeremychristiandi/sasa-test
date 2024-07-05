@extends('index')

@section('container')

<div>
    <h1>Stock {{$stock->id}}</h1>
    <form action="/stocks/{{$stock->id}}" method="post" enctype="multipart/form-data">
        @csrf
    @method("put")
            <div>
            <label for="">Product</label>
            <select name="product" id="product">
                @foreach($products as $p)
                @if($p->isActive == 1)
                <option value="{{$p->id}}">{{$p->description}}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div>
            <label for="">Category</label>
            <select name="category" id="category">
                @foreach($categories as $c)
                @if($c->isActive == 1)
                <option value="{{$c->id}}">{{$c->description}}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div>
            <label for="">Jenis</label>
            <select name="jenis" id="category">
                @foreach($jenis as $j)
                @if($j->isActive == 1)
                <option value="{{$j->id}}">{{$j->description}}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div>
            <label for="">Location</label>
            <select name="location" id="location">
                @foreach($locations as $l)
                @if($l->isActive == 1)
                <option value="{{$l->id}}">{{$l->description}}</option>
                @endif
                @endforeach
            </select>
            </div>
            <div>
            <label for="">Quantity</label>
            <input type="number" name="quantity" value="{{ $stock->quantity }}">
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