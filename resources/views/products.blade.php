@extends('index')

@section('container')
<div class="content">
    <div class="content__trending my-3 text-center">
        <h2>Products</h2>
            <div class="row">
            <table>
                <tr>
                  <th>ID</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Group</th>
                  <th>Is Active</th>
                </tr>
                @foreach ($products as $p)
                  <tr>
                    <td>{{$p->id}}</td>
                    <td>{{$p->description}}</td>
                    <td>{{optional($p->category)->description}}</td>
                    <td>{{optional($p->jenis)->description}}</td>
                    <td>{{$p->isActive}}</td>
                    <td><a href="/products/{{ $p->id }}">Edit &#x279C;</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
    </div>
</div>
@endsection