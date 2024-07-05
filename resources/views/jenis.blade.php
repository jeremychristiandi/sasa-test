@extends('index')

@section('container')

<div class="content">
    <div class="content__trending my-3 text-center">
        <h2>Jenis</h2>
            <div class="row">
            <table>
                <tr>
                  <th>ID</th>
                  <th>Description</th>
                  <th>Category</th>
                  <th>Is Active</th>
                </tr>
                @foreach ($jenis as $j)
                  <tr>
                    <td>{{$j->id}}</td>
                    <td>{{$j->description}}</td>
                    <td>{{optional($j->category)->description}}</td>
                    <td>{{$j->isActive}}</td>
                    <td><a href="/jenis/{{ $j->id }}">Edit &#x279C;</a></td>
                  </tr>
                  @endforeach
                </table>
            </div>
    </div>
</div>
@endsection