<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\ModelMahasiswa;


class MahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\ModelMahasiswa::create (
        //     [
        //         'nama' => "Liz",
        //         'nobp' => "123456789",
        //         'email' => "iniemail@user.com",
        //         'jurusan' => "Teknik Informatika",
        //         'prodi' => "SI",
        //         'alamat' => "Jl. Raya No. 1"
        //     ]
        //     );

        ModelMahasiswa::factory(40)->create();

    }
}
