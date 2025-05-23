<?php

namespace App\Http\Controllers\Mahasiswa;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\Mahasiswa\ControllerMahasiswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\ModelMahasiswa;


class ControllerMahasiswa extends Controller
{


   public function insertSql()
   {
       $query = DB::insert("insert into mahasiswas (nama,nobp,jurusan,prodi,email,alamat,created_at,updated_at) values ('33333', 'ssssss','ti','rpl','asds@gmail.com','jl asdasda',now(),now())");
   }


   public function insertPrepared()
   {
       $query = DB::insert("insert into mahasiswas (nama,nobp,jurusan,prodi,email,alamat,created_at,updated_at) values (?,?,?,?,?,?,?,?)", ['2322222', 'ujang bp', 'ti', 'TK', 'ujang@gmail.com', 'jl terus', now(), now()]);
   }


   public function insertBinding()
   {
       $query = DB::insert("insert into mahasiswas (nama,nobp,jurusan,prodi,email,alamat,created_at,updated_at) values (: :nama,:jurusan,:prodi,:email,:alamat,:created_at,:udpated_at)", ['nim'=>'2323333444','nama'=> 'udin bp','jurusan'=> 'ti', 'prodi'=>'MI','email'=> 'udin@gmail.com','alamat'=> 'jl panjang','created_at'=> now(),'udpated_at'=> now()]);
   }


   public function update()
   {
       $query = DB::update("UPDATE mahasiswas SET jurusan = 'bahasa korea' WHERE nama=?",['udin Bp']);
   }


   public function delete()
   {
       $query = DB::delete("DELETE FROM mahasiswas WHERE nama=?",['udin Bp']);
   }


   public function select()
   {
       $query = DB::select('select * from mahasiswas');
       dd($query);
   }


   public function selectTampil()
   {
       $query = DB::select('select * from mahasiswas');
       echo ($query[1]->id). "<br />";
       echo ($query[1]->nobp). "<br />";
       echo ($query[1]->nama). "<br />";
       echo ($query[1]->jurusan). "<br />";
       echo ($query[1]->prodi). "<br />";
       echo ($query[1]->email). "<br />";
       echo ($query[1]->alamat);
   }


   public function selectView()
   {
      $mhs = ModelMahasiswa::paginate(10);
      return view('akademik.mahasiswapnp', compact('mhs'));
   }
   public function selectWhere()
   {
       $query = DB::select('SELECT * FROM mahasiswas WHERE prodi=? ORDER BY nim ASC',['TK']);
     return view('akademik.mahasiswapnp',['mhs'=>$query]);
   }


   public function statement()
   {
       $query = DB::statement('TRUNCATE mahasiswas');
     return ('tabel mahasiswa sudah kosong');
   }
   /**
    * Display a listing of the resource.
    */
   public function index()
   {
       //
       DB::listen(function ($query) {
           logger("Query: " . $query->sql . " |binding " . implode(", ", $query->bindings));
       });
       //mengambil semua data mahasiswa
       $data = ModelMahasiswa::all();
       // dd($data);


       dump($data);
       return view("mahasiswa.index", compact("data"));
   }


   /**
    * Show the form for creating a new resource.
    */
   public function create()
   {
       //
   }


   /**
    * Store a newly created resource in storage.
    */
   public function store(Request $request)
   {
       //
   }


   /**
    * Display the specified resource.
    */
   public function show(string $id)
   {
       //
   }


   /**
    * Show the form for editing the specified resource.
    */
   public function edit(string $id)
   {
       //
   }


   /**
    * Update the specified resource in storage.
    */
   


   /**
    * Remove the specified resource from storage.
    */
   public function destroy(string $id)
   {
       //
 
    }
}