@extends('layouts.main')

@section('content')
    <h2>Form Tambah Pengguna</h2>

    {{-- Pesan sukses --}}
    @if(session('success'))
        <div style="color: green;">
            {{ session('success') }}
        </div>
    @endif

    {{-- Tampilkan semua error --}}
    @if($errors->any())
        <div style="color: red;">
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penggunas.store') }}" method="POST" enctype="multipart/form-data">
        {{-- CSRF Token --}}
        @csrf

        {{-- Nama --}}
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name') }}">
        @error('name')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- Email --}}
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email') }}">
        @error('email')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- Password --}}
        <label>Password:</label><br>
        <input type="password" name="password">
        @error('password')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- Konfirmasi Password --}}
        <label>Konfirmasi Password:</label><br>
        <input type="password" name="password_confirmation">
        @error('password_confirmation')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- No. HP --}}
        <label>No. HP:</label><br>
        <input type="text" name="phone" value="{{ old('phone') }}">
        @error('phone')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- up file --}}
        <label>Upload File: <b>(pdf, jpeg, jpg, png, heic only!)</b></label><br>
        <input type="file" name="file_upload" accept=".jpg, .jpeg, .png, .heic">
        @error('file_upload')
            <br><small style="color: red;">{{ $message }}</small>   
        @enderror
        <br><br>

        {{-- Tombol Submit --}}
        <button type="submit">Simpan</button>
    </form>
@endsection
