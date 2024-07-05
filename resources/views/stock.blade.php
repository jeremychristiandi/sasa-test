@extends('index')

@section('container')
<div class="content">
    <div class="content__trending my-3 text-center">
        <h2>Stocks</h2>
            <div class="row">
            <table>
                <tr>
                  <th>ID</th>
                  <th>Produk</th>
                  <th>Category</th>
                  <th>Group</th>
                  <th>Stok</th>
                  <th>Is Active</th>
                </tr>
                @foreach ($stock as $s)
                  <tr>
                    <td>{{$s->id}}</td>
                    <td>{{optional($s->product)->description}}</td>
                    <td>{{optional($s->category)->description}}</td>
                    <td>{{optional($s->location)->description}}</td>
                    <td>{{$s->quantity}}</td>
                    <td>{{$s->isActive}}</td>
                    <td><a href="/stocks/{{ $s->id }}">Edit &#x279C;</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
    </div>
</div>
@endsection