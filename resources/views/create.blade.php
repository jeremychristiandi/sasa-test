@extends('index')

@section('container')
<div class="d-flex flex-column">
    <div class="d-flex flex-column align-items-center mb-5" style="width: 75%; margin: auto;">
        <h2 class="text-center">New Category</h2>
        <form action="/create/category" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Description</label>
                <input type="text" class="mb-2" value="" id="description" placeholder="Description" name="description">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Is Active</label>
                <input type="text" class="mb-2" value="" id="isActive" placeholder="isActive" name="isActive">
            </div>
            <div class="text-center">
                  <button class="btn btn-primary" type="submit">Add</button>
              </div>
        </form>
    </div>

    <div class="d-flex flex-column align-items-center mb-5" style="width: 75%; margin: auto;">
        <h2 class="text-center">New Group</h2>
        <form action="/create/jenis" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Description</label>
                <input type="text" class="mb-2" value="" id="description" placeholder="Description" name="description">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Category</label>
                <select name="category" id="category">
                @foreach ($categories as $c)
                @if($c->isActive == 1)
                <option value="{{$c->id}}">{{$c->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Is Active</label>
                <input type="text" class="mb-2" value="" id="isActive" placeholder="isActive" name="isActive">
            </div>
            <div class="text-center">
                  <button class="btn btn-primary" type="submit">Add</button>
              </div>
        </form>
    </div>

    <div class="d-flex flex-column align-items-center mb-5" style="width: 75%; margin: auto;">
        <h2 class="text-center">New Product</h2>
        <form action="/create/product" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Description</label>
                <input type="text" class="mb-2" value="" id="description" placeholder="Description" name="description">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Category</label>
                <select name="category" id="category">
                @foreach ($categories as $c)
                @if($c->isActive == 1)
                <option value="{{$c->id}}">{{$c->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Group</label>
                <select name="jenis" id="jenis">
                @foreach ($jenis as $j)
                @if($j->isActive == 1)
                <option value="{{$j->id}}">{{$j->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Is Active</label>
                <input type="text" class="mb-2" value="" id="isActive" placeholder="isActive" name="isActive">
            </div>
            <div class="text-center">
                  <button class="btn btn-primary" type="submit">Add</button>
              </div>
        </form>
    </div>

    <div class="d-flex flex-column align-items-center mb-5" style="width: 75%; margin: auto;">
        <h2 class="text-center">New Location</h2>
        <form action="/create/location" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Location</label>
                <input type="text" class="mb-2" value="" id="description" placeholder="Location description" name="description">
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Is Active</label>
                <input type="text" class="mb-2" value="" id="isActive" placeholder="isActive" name="isActive">
            </div>
            <div class="text-center">
                  <button class="btn btn-primary" type="submit">Add</button>
              </div>
        </form>
    </div>

    <div class="d-flex flex-column align-items-center mb-5" style="width: 75%; margin: auto;">
        <h2 class="text-center">New Stock</h2>
        <form action="/create/stock" method="post" enctype="multipart/form-data">
            @csrf
            @method('post')
            <div class="mb-3">
                <label for="name" class="form-label">Product</label>
                <select name="product" id="product">
                @foreach ($products as $p)
                @if($p->isActive == 1)
                <option value="{{$p->id}}">{{$p->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Product Group</label>
                <select name="jenis" id="jenis">
                @foreach ($jenis as $j)
                @if($j->isActive == 1)
                <option value="{{$j->id}}">{{$j->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Category</label>
                <select name="category" id="category">
                @foreach ($categories as $c)
                @if($c->isActive == 1)
                <option value="{{$c->id}}">{{$c->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Lokasi Gudang</label>
                <select name="location" id="location">
                @foreach ($locations as $l)
                @if($l->isActive == 1)
                <option value="{{$l->id}}">{{$l->description}}</option>
                @endif
                @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label">Stok</label>
                <input type="number" class="mb-2" value="" id="quantity" placeholder="Jumlah stok" name="quantity">
            </div>
            <div class="text-center">
                  <button class="btn btn-primary" type="submit">Add</button>
              </div>
        </form>
    </div>
</div>
@endsection