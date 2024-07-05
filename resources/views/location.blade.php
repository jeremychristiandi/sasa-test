@extends('index')

@section('container')
<div class="content">
    <div class="content__trending my-3 text-center">
        <h2>Locations</h2>
            <div class="row">
            <table>
                <tr>
                  <th>ID</th>
                  <th>Description</th>
                  <th>Is Active</th>
                </tr>
                @foreach ($locations as $l)
                  <tr>
                    <td>{{$l->id}}</td>
                    <td>{{$l->description}}</td>
                    <td>{{$l->isActive}}</td>
                    <td><a href="/locations/{{ $l->id }}">Edit &#x279C;</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
    </div>
</div>
@endsection