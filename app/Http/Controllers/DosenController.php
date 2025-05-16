<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Dosen;
use Illuminate\Http\Request;

class DosenController extends Controller
{
    public function index()
    {
        return 'Menampilkan data dosen';
    }

    public function cekObjek()
    {
        $dosen = new Dosen();
        dd($dosen);
    }

    public function insert()
    {
        $dosen = new Dosen();
        $dosen->nama = 'Paill';
        $dosen->nip = '21';
        $dosen->email = 'paiel@gmail.com';
        $dosen->nohp = '08123456789';
        $dosen->alamat = 'Rumah Pail';
        $dosen->keahlian = 'Web';
        $dosen->save();

        dd($dosen);
    }

    public function massAssignment()
    {
        $dosen1 = Dosen::create([
            'nama' => 'pail',
            'nip' => '2333',
            'email' => 'paiil@gmail.com',
            'nohp' => '0999',
            'alamat' => 'rumah',
            'keahlian' => 'web'
        ]);
        dump($dosen1);

        $dosen2 = Dosen::create([
            'nama' => 'carmen',
            'nip' => '2334',
            'email' => 'carmenita@gmail.com',
            'nohp' => '09991',
            'alamat' => 'rumah',
            'keahlian' => 'AI'
        ]);
        dump($dosen2);
    }

    public function updateDosen()
    {
        $dosen = Dosen::find(6);
        $dosen->nama = "pail";
        $dosen->email = "pail@gmail.com";
        $dosen->save();

        dd($dosen);
    }

    public function updateWhere()
    {
        $dosen = Dosen::where('nohp', '08123456789')->first();
        $dosen->keahlian = 'AI';
        $dosen->alamat = "rummmaahh";
        $dosen->nohp = "08123456789";

        dd($dosen);
    }

    public function massUpdate()
    {
        $dosen = Dosen::where('nohp', '08123456789')->first()->update([
            'alamat' => "jalan jalan",
            'keahlian' => "cloud platform",
        ]);

        dump($dosen);
    }

    public function delete()
    {
        $dosen = Dosen::find(3);
        $dosen->delete();

        dd($dosen);
    }

    public function destroy()
    {
        $dosen = Dosen::destroy(6);
        dd($dosen);
    }

    public function massDelete()
    {
        $dosen = Dosen::where('keahlian', 'Data Analyst')->delete();
        dd($dosen);
    }

    public function all()
    {
        $dosen = Dosen::all();

        foreach ($dosen as $itemDosen) {
            echo $itemDosen->id . '<br>';
            echo $itemDosen->nama . '<br>';
            echo $itemDosen->nip . '<br>';
            echo $itemDosen->email . '<br>';
            echo $itemDosen->nohp . '<br>';
            echo $itemDosen->alamat;
            echo '<hr>';
        }
    }

    public function allView()
    {
        $dosen = Dosen::all();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function getWhere()
    {
        $dosen = Dosen::where('keahlian', 'cloud platform')
            ->orderBy('nama', 'asc')
            ->get();

        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function testWhere()
    {
        $dosen = Dosen::where('keahlian', 'Web')
            ->orderBy('nip', 'asc')
            ->get();

        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function first()
    {
        $dosen = Dosen::where('keahlian', 'Web')->first();
        return view('akademik.dosen1', ['dosen' => $dosen]);
    }

    public function find()
    {
        $dosen = Dosen::find(2);
        return view('akademik.dosen1', ['dosen' => $dosen]);
    }

    public function latest()
    {
        $dosen = Dosen::latest()->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function limit()
    {
        $dosen = Dosen::latest()->limit(2)->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function skipTake()
    {
        $dosen = Dosen::orderBy("id")->skip(1)->take(2)->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function softDelete()
    {
        Dosen::where('id', '2')->delete();
        return 'Data berhasil dihapus';
    }

    public function withTrashed()
    {
        $dosen = Dosen::withTrashed()->get();
        return view('akademik.dosen', ['dsn' => $dosen]);
    }

    public function restore()
    {
        Dosen::withTrashed()->where('id', '2')->restore();
        return "Data berhasil di-restore";
    }

    public function forceDelete()
    {
        Dosen::where('id', '2')->forceDelete();
        return "Data berhasil dihapus secara permanen";
    }
}
