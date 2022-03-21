@extends('template')
@section('content')
  <div class="container mt-5 mb-5">
    <table class="table">
        <thead class="thead-light">
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nama</th>
            <th scope="col">Tempat,Tanggal Lahir</th>
            <th scope="col">Posisi Yang Dilamar</th>
          </tr>
        </thead>
        <tbody>
        @foreach ($biodata as $item)
            <tr>
                <th scope="row">1</th>
                <td>{{$item->name}}</td>
                <td>{{$item->place_birth_day}}</td>
                <td>{{$item->position}}</td>
            </tr>
        @endforeach
    </tbody>
      </table>
  </div>
@endsection