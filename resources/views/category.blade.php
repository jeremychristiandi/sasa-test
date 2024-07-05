@extends('index')

@section('container')
<div class="content">
    <div class="my-3 text-center">
        <h2>Categories</h2>
            <div class="row">
            <table>
                <tr>
                  <th>ID</th>
                  <th>Description</th>
                  <th>Is Active</th>
                </tr>
                @foreach ($categories as $c)
                  <tr>
                    <td>{{$c->id}}</td>
                    <td>{{$c->description}}</td>
                    <td>{{$c->isActive}}</td>
                    <td><a href="/categories/{{ $c->id }}">Edit &#x279C;</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
    </div>
</div>
@endsection