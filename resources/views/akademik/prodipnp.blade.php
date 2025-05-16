@extends('layouts.main')
@section('title', 'Daftar Prodi Jurusan TI')
@section('content')

<h1>Daftar Jurusan</h1>
<div class="row">

    {{-- MI --}}
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('MI.png') }}" class="card-img-top" alt="Logo MI">
            <div class="card-body">
                <h5 class="card-title">Prodi Manajemen Informatika</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero
                    harum soluta reiciendis </p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
        </div>
    </div>

    {{-- TK --}}
    <div class="col-lg-4">
        <div class="card" style="width: 18rem;">
            <img src="{{ asset('TK.png')}}" class="card-img-top" alt="Logo TI">
            <div class="card-body">
                <h5 class="card-title">Prodi Teknik Komputer</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero
                    harum soluta reiciendis </p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
        </div>
    </div>

    {{-- TRPL --}}
    <div class="col-lg-4">
        <di class="card" style="width: 18rem;">
            <img src="{{asset('TRPL.png')}}" class="card-img-top" alt="Logo TI">
            <div class="card-body">
                <h5 class="card-title">Prodi Teknologi Rekayasa Perangkat Lunak</h5>
                <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi nihil voluptate vero
                    harum soluta reiciendis </p>
                <a href="#" class="btn btn-primary">more</a>
            </div>
    </div>
</div>
</div>

@endsection
