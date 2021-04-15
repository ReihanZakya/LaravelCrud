<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Siswa;

class SiswaController extends Controller
{
    public function home(){
        return view('welcome');
    }

    public function index(){
        $data = Siswa::all();
        return view('index', compact('data'));
    }

    public function show($id)
    {
        $data = Siswa::find($id); 
        return view('datasiswa', compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validated = $request->validate([
            'nama' => 'required|min:3|max:255',
        ]);

        $data = new Siswa;
        $data->nama = $request->nama;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->agama = $request->agama;
        $data->alamat = $request->alamat;
        $data->save();
        return redirect('siswa');
    }

    public function edit($id)
    {
        $data = Siswa::find($id); 
        return view('edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
    
        $data = Siswa::find($id);
        $data-> nama = $request->nama;
        $data-> jenis_kelamin = $request->jenis_kelamin;
        $data-> agama = $request->agama;
        $data-> alamat = $request->alamat;
        $data->save();
        return redirect('siswa/'. $id);
        
      
    }

    public function delete($id){
        $data = Siswa::find($id);
        $data->delete();
        return redirect('siswa');
    }

}
    //CATATAN
    //insert manual
        // $data = new Siswa;
        // $data->nama = 'udin pertama';
        // $data->jenis_kelamin = 'Perempuan';
        // $data->agama = 'isis';
        // $data->alamat = 'kolong jembatan';
        // $data->save();
        
    //insert mass assigment
        // Siswa::create([
        //     'nama' => 'udin petot',
        //     'jenis_kelamin' => 'cewo',
        //     'agama' => 'budha',
        //     'alamat' => 'sumatra',
        // ]);

    //update biasa
        // $data = Siswa::where('nama','like','petot')->get();
        // $data ->nama ='awaludin';
        // $data->save();
        
    //update data mass assigment
        // Siswa::find(9)->update([
        //     'nama' => 'Awaludin'
        // ]);

    //delete
        // $data = Siswa::find(9);
        // $data->delete();

    //delete
        // Siswa::destroy(6);