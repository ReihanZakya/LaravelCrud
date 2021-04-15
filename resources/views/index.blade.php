@extends('layout.master')

@section('title','Data Siswa')

@section('content')

<div class="container">
<div class="row">
    <div class="col-6 mt-3 mb-3">
    <h2>Data Siswa</h2>
    </div>
    <div class="col-6">
      <a href="/siswa/create" class="btn btn-primary btn-sm float-right mt-4">Tambah Siswa</a> 
  </div>
  </div>

<div class="col">
  
    <table class="table table-hover">
      <thead class="thead-dark">
        <tr>
          <th scope="col">Nama</th>
          <th scope="col">Aksi</th>
  
        </tr>
      </thead>
      <tbody>
      @foreach($data as $user)
        <tr>
          <td> {{$user->nama}}</td>
          <td>
          <a href="/siswa/{{$user->id}}" class = "btn btn-success btn-sm">Detail</a>
          <a href="/siswa/{{$user->id}}/delete" class = "btn btn-danger btn-sm">Delete</a>
          
          </td>
  
        
        </tr>
    @endforeach

      </tbody>
    </table>

</div>

</div>
   @endsection