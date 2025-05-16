@extends('layouts.main')


@section('content')
<h2>Daftar Pengguna</h2>


@if(session('success'))
 <div style="color:green;">{{ session('success') }}</div>
@endif


<table border="1" cellpadding="8">
   <thead>
       <tr>
           <th>Nama</th>
           <th>Email</th>
           <th>Telepon</th>
           <th>Foto</th>
           <th>Aksi</th>
       </tr>
   </thead>
   <tbody>
       @foreach ($penggunas as $user)
       <tr>
           <td>{{ $user->name }}</td>
           <td>{{ $user->email }}</td>
           <td>{{ $user->phone }}</td>
           <td>
            @if ($user->file_upload)
               <img src="{{ asset('storage/' . $user->file_upload) }}"
                alt="Foto Pengguna" width="200" height="100"> 
               @else
               <span style="color: gray">There's no image</span> 
            @endif
           </td>
           <td>
               <a href="{{ route('penggunas.edit', $user->id) }}">Edit</a>
               <form action="{{ route('penggunas.destroy', $user->id) }}" method="POST" style="display:inline;">
                   @csrf
                   @method('DELETE')
                   <button type="submit" onclick="return confirm('Yakin hapus?')">Hapus</button>
               </form>
           </td>
       </tr>
       @endforeach
   </tbody>
</table>
<br>

{{-- menambah pengguna --}}
<a class="btn btn-primary" href="{{ route('penggunas.create') }}">Tambah Pengguna</a>

{{-- Pagination --}}


{{ $penggunas->links() }}
@endsection
