@extends('layouts.main')
@section('title', 'Daftar Dosen Jurusan TI')
@section('content')
    <h1>Daftar Dosen Jurusan TI</h1>
    <ol>
        @forelse ($dos as $namados)
            <li> {{{$namados}}} </li>
        @empty
            <div class="alert alert-warning d-inline-block">
                Tidak ada data dosen...
            </div>
        @endforelse
    </ol>
@endsection