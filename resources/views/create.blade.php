@extends('layout.master')
    
    @section('title','Edit Siswa')

    @section('content')
<div class="container">
        <form action="/siswa/store" method="post" >
        
    <div class="form-group">
        <label for="exampleInputEmail1">Nama </label>
        <input name="nama"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    @if(count($errors) > 0)
        <p>
        @foreach($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
        </p>
    @endif
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin </label>
        <input name="jenis_kelamin"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Agama </label>
        <input name="agama"  type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
    </form>
</div>
@endsection