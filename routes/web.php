<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Mahasiswa\ControllerMahasiswa;
use App\Http\Controllers\DosenpnpController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\PenggunaController;
use App\Http\Controllers\DosentiController;
use App\Http\Controllers\DashboardController;
use phpDocumentor\Reflection\Types\Resource_;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::get('/', function () {
    return view('welcome');
});

Route::get('mahasiswa', ['Mahasiswa\ControllerMahasiswa@index']);


Route::get('/maintenance', function () {
    abort(505);
});


Route::get('/mahasiswa', ['Mahasiswa\ControllerMahasiswa', 'index']);

Route::view('hello', 'hello', ['nama' => 'Supri']);

Route::get('listmahasiswa', function () {
    $arrmhs = [
        'fail',
        'fajar',
        'lutfi',
        'debby'
    ];
    return view('akademik.mahasiswa', ['mhs' => $arrmhs]);
});

Route::get('/profile', function () {
    echo '<h1>Haloo</h1>';
    return '<p>Welcome to my life yahah<p>';
});

Route::get('mahasiswa/ti/nama', function(){
    echo '<p>Jurusan Teknologi Informasi<p>';
    echo '<p>Halo semuanya<p>';
});

Route::get('hitungusia/{nama}/{tahunlahir}', function($nama,$tahun_lahir) {
    $usia = date('Y') - $tahun_lahir;
    return "<p>hai <b>".$nama."</b> <p>usia anda adalah ".$usia." tahun</p>";
});

Route::get('users/{id}', function ($id) {
    return '<p> user admin meiliki id <b>'. $id.'</b> <p>';
});

Route::redirect('public', 'mahasiswa');

// route group
Route::prefix('login')->group(function(){
    Route::get('mahasiswa', function () {
        return '<p>ini adalah mahasiswa</p>';
    });

    Route::get('dosen', function () {
        return '<p>ini adalah dosen teknologi informasi</p>';
    });

    Route::get('admin', function () {
        return '<p>admin</p>';
    });
});

//memampilkan nama aja 
Route::get(
    'listmahasiswa',
    function () {
    $mhs1 = 'pail';
    $mhs2 = 'fajar';
    $mhs3 = 'lutfi';
    $mhs4 = 'debby';
    return view('akademik.mahasiswalist', compact('mhs1', 'mhs2', 'mhs3', 'mhs4'));
});

// menggunakan if else untuk menentukan nilai
Route::get(
    'nilaimahasiswa',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = 90;
        return view('akademik.nilaimahasiswa', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan switch untuk menentukan nilai
Route::get(
    'nilaimahasiswaswitch',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = 90;
        return view('akademik.nilaimahasiswaswitch', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan foreach untuk menentukan nilai
Route::get(
    'nilaimahasiswaloop',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = 90;
        return view('akademik.nilaimahasiswaloop', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan while 
Route::get(
    'nilaimahasiswawhile',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = 90;
        return view('akademik.nilaimahasiswawhile', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan foreach
Route::get(
    'nilaimahasiswaforeach',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = [90, 80, 70, 60];
        return view('akademik.nilaimahasiswaforeach', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan forelse
Route::get(
    'nilaimahasiswaforelse',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = [90, 80, 0, 60];
        return view('akademik.nilaimahasiswaforelse', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan continue
Route::get(
    'nilaimahasiswacontinue',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = [90, 80, 0, 60];
        return view('akademik.nilaimahasiswacontinue', compact('nama', 'nim', 'total_nilai'));
});

// menggunakan break
Route::get(
    'nilaimahasiswabreak',
    function () {
        $nama = 'pail';
        $nim = '2311082013';
        $total_nilai = [90, 80, 0, 60];
        return view('akademik.nilaimahasiswabreak', compact('nama', 'nim', 'total_nilai'));
});

Route::get('/homepnp', function(){
return view('akademik.homepnp');
});

Route::get('/mahasiswapnp', function () {
    $arrmah = ['pail', 'carmen', 'haerin', 'liz', 'sowon', 'yoona' ];
    return view('akademik.mahasiswapnp',  ['mhs'=> $arrmah]);
});

// Route::get('/dosenpnp', function () {
//     $arrdos = ['Web', 'AI', 'ML', 'Network', 'Cyber', 'Design', ];
//     return view('akademik.dosenpnp',  ['dos'=> $arrdos]);
// });

Route::get('/prodipnp', function () {
    $arrpro = ['TRPL', 'MI', 'TK', 'ANIMASI' ];
    return view('akademik.prodipnp',  ['data'=> $arrpro]);
});

// Route::get('pnp/{jurusan}/{ti}/', function ( $jurusan, $prodi) {
//     $data = [$jurusan, $prodi];
//     return view('akademik.prodipnp')-> with('data',$data );
// }) -> name('prodipnp');

// Route::get('pnp/jurusan/ti/mahasiswa', function () {
//     $arrmah = ['pail', 'carmen', 'haerin', 'liz', 'sowon', 'yoona' ];
//     return view('akademik.mahasiswapnp', ['mhs'=> $arrmah]);
// }) -> name('mahasiswapnp');

// Route::get('pnp/jurusan/ti/dosen', function () {
//     $arrdos = ['Web', 'AI', 'ML', 'Network', 'Cyber', 'Design', ];
//     return view('akademik.dosenpnp', ['dos'=> $arrdos]);
// }) -> name('dosenpnp');

// Route::get('/teknisi', [ControllerTeknisi::class, 'index']);
// Route::get('/teknisi/create', [ControllerTeknisi::class, 'create']);
// Route::post('/teknisi', [ControllerTeknisi::class, 'store']);
// Route::get('/teknisi/{id}', [ControllerTeknisi::class, 'show']);
// Route::get('/teknisi/{id}/edit', [ControllerTeknisi::class, 'edit']);
// Route::put('/teknisi/{id}', [ControllerTeknisi::class, 'update']);
// Route::delete('/teknisi/{id}', [ControllerTeknisi::class, 'destroy']);

// Route::apiResource('users', ControllerUser::class);

Route::get('/insert-sql', [ControllerMahasiswa::class,'insertSql']);
Route::get('/insert-prepared', [ControllerMahasiswa::class,'insertPrepared']);
Route::get('/insert-binding', [ControllerMahasiswa::class,'insertBinding']);
Route::get('/update', [ControllerMahasiswa::class,'update']);
Route::get('/delete', [ControllerMahasiswa::class,'delete']);
Route::get('/select', [ControllerMahasiswa::class,'select']);
Route::get('/select-tampil', [ControllerMahasiswa::class,'selectTampil']);
Route::get('/select-view', [ControllerMahasiswa::class,'selectView']);
Route::get('/select-where', [ControllerMahasiswa::class,'selectWhere']);
Route::get('/statement', [ControllerMahasiswa::class,'statement']);

// Query Builder
Route::get('dosenpnp', [DosenpnpController::class,'index'])->name('dosens.index');
Route::get('dosenpnp/create', [DosenpnpController::class,'create'])->name('dosens.create');
Route::post('dosenpnp', [DosenpnpController::class,'store'])->name('dosens.store');
Route::get('dosenpnp/{id}/edit', [DosenpnpController::class,'edit'])->name('dosens.edit');
Route::get('dosenpnp/{id}', [DosenpnpController::class,'update'])->name('dosens.update');
Route::put('dosenpnp/{id}', [DosenpnpController::class,'update'])->name('dosens.update');
Route::delete('dosenpnp/{id}', [DosenpnpController::class,'destroy'])->name('dosens.destroy');

// Eloquent ORM
Route::get('dosenti', [DosentiController::class,'index'])->name('dosensti.index');
Route::get('dosenti/create', [DosentiController::class,'create'])->name('dosensti.create');
Route::post('dosenti', [DosentiController::class,'store'])->name('dosensti.store');
Route::get('dosenti/{id}/edit', [DosentiController::class,'edit'])->name('dosensti.edit');
Route::get('dosenti/{id}', [DosentiController::class,'update'])->name('dosensti.update');
Route::put('dosenti/{id}', [DosentiController::class,'update'])->name('dosensti.update');
Route::delete('dosenti/{id}', [DosentiController::class,'destroy'])->name('dosensti.destroy');

Route::get('cek-objek', [DosenController::class,'cekObjek']);
Route::get('insert', [DosenController::class,'insert']);
Route::get('mass-assignment', [DosenController::class,'massAssignment']);
Route::get('updatedosen', [DosenController::class,'updatedosen']);
Route::get('updatedosen-where', [DosenController::class,'updateWhere']);
Route::get('mass-update', [DosenController::class,'massUpdate']);
Route::get('deletedosen', [DosenController::class,'deletedosen']);
Route::get('destroydosen', [DosenController::class,'destroydosen']);
Route::get('mass-delete', [DosenController::class,'massDelete']);
Route::get('all', [DosenController::class,'all']);
Route::get('all-view', [DosenController::class,'allView']);
Route::get('get-where', [DosenController::class,'getWhere']);
Route::get('test-where', [DosenController::class,'testWhere']);
Route::get('first', [DosenController::class,'first']);
Route::get('find', [DosenController::class,'find']);
Route::get('latest', [DosenController::class,'latest']);
Route::get('limit', [DosenController::class,'limit']);
Route::get('skip-take', [DosenController::class,'skipTake']);
Route::get('soft-delete', [DosenController::class,'softDelete']);
Route::get('with-trashed', [DosenController::class,'withTrashed']);
Route::get('restore', [DosenController::class,'restore']);
Route::get('force-delete', [DosenController::class,'forceDelete']);

// Route::get('pengguna/create', [PenggunaController::class,'create'])->name('penggunas.create');
// Route::post('pengguna', [PenggunaController::class,'store'])->name('penggunas.store');
// Route::get('pengguna', [PenggunaController::class,'index'])->name('penggunas.index');
// Route::get('pengguna/{id}/edit', [PenggunaController::class,'edit'])->name('penggunas.edit');
// Route::put('pengguna/{id}', [PenggunaController::class,'update'])->name('penggunas.update');
// Route::delete('pengguna/{id}', [PenggunaController::class,'destroy'])->name('penggunas.destroy');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('dashboard', [DashboardController::class, 'index'])->
        name('dashboard');

    Route::prefix('profile')->group(function () {
        Route::get('/', [ProfileController::class, 'edit'])->name('profile.edit');
        Route::patch('/', [ProfileController::class, 'update'])->name('profile.update');
        Route::delete('/', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
    Route::middleware('auth', 'admin')->group(function () {
        Route::resource('penggunas', PenggunaController::class);
    });
});

require __DIR__.'/auth.php';