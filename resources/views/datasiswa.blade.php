@extends('layout.master')

@section('title','Data Siswa')

@section('content')

<div class="container">
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Nama</th>
        <th scope="col">Jenis Kelamin</th>
        <th scope="col">Agama</th>
        <th scope="col">Alamat</th>
        <th scope="col">Aksi</th>
      </tr>
    </thead>
    <tbody>
   
      <tr>
        <td>{{$data->nama}}</td>
        <td>{{$data->jenis_kelamin}}</td>
        <td>{{$data->agama}}</td>
        <td>{{$data->alamat}}</td>
        <td><a href="/siswa/{{$data->id}}/edit" class = "btn btn-success">Edit</a></td>

      
      </tr>
  

    </tbody>
  </table>
</div>
  
@endsection

    