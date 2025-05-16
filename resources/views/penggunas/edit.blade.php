@extends('layouts.main')

@section('content')
    <h2>Edit Pengguna</h2>

    {{-- Tampilkan error jika ada --}}
    @if ($errors->any())
        <div style="color: red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('penggunas.update', $pengguna->id) }}" method="POST" enctype="multipart/form-data">
        {{-- CSRF Token --}}
        @csrf
        @method('PUT')

        {{-- Nama --}}
        <label>Nama:</label><br>
        <input type="text" name="name" value="{{ old('name', $pengguna->name) }}">
        @error('name')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- Email --}}
        <label>Email:</label><br>
        <input type="email" name="email" value="{{ old('email', $pengguna->email) }}">
        @error('email')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        {{-- Telepon --}}
        <label>Telepon:</label><br>
        <input type="text" name="phone" value="{{ old('phone', $pengguna->phone) }}">
        @error('phone')
            <br><small style="color: red;">{{ $message }}</small>
        @enderror
        <br><br>

        @if ($pengguna->file_upload)
            <label>Foto Sekarang:</label><br>
            <img src="{{ asset('storage/' . $pengguna->file_upload) }}" alt="Foto Pengguna" width="200" height="100">
            <br><br>
            
        @endif
        {{-- up file --}}
        <label>Upload File Baru: <b>(pdf, jpeg, jpg, png, heic only!)</b></label><br>
        <input type="file" name="file_upload" accept=".jpg, .jpeg, .png, .heic">
        @error('file_upload')
            <br><small style="color: red;">{{ $message }}</small>   
        @enderror
        <br><br>

        {{-- Tombol --}}
        <button type="submit">Update</button>
    </form>
@endsection
