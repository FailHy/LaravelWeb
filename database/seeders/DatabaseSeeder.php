<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        DB::table('dosens')->insert([
            'nama' => 'haerin',
            'nip' => '123',
            'nohp' => '08080808987',
            'email' => 'haerin@test.com',
            'alamat' => 'rumahrumah',
            'created_at' => now(),
            'updated_at' => now()
            ]);

        DB::table('mahasiswas')->insert(
            [
                'nama' => 'haerin',
                'nim' => '123',
                'jurusan' => 'informatika',
                'nohp' => '08080808987',
                'email' => 'haerina@test.com',
                'tgl_lahir' => '2000-01-01',
                'created_at' => now(),
                'updated_at' => now()
            ]);
    }
}
