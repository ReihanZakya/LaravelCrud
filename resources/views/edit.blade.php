@extends('layout.master')
    
    @section('title','Edit Siswa')

    @section('content')
<div class="container">
        <form action="/siswa/{{$data->id}}/update" method="post" >
        
    <div class="form-group">
        <label for="exampleInputEmail1">Nama </label>
        <input name="nama" value="{{$data->nama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Jenis Kelamin </label>
        <input name="jenis_kelamin" value="{{$data->jenis_kelamin}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
        <label for="exampleInputEmail1">Agama </label>
        <input name="agama" value="{{$data->agama}}" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="form-group">
    <label for="exampleFormControlTextarea1">Alamat</label>
    <textarea name="alamat" class="form-control" id="exampleFormControlTextarea1" rows="3">{{$data->alamat}}</textarea>
  </div>
   
    <button type="submit" class="btn btn-primary">Submit</button>
    @csrf
    </form>
</div>
@endsection