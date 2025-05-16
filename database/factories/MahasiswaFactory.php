<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Mahasiswa;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Mahasiswa>
 */
class MahasiswaFactory extends Factory
{
    protected $model = \App\Models\ModelMahasiswa::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nama' => fake()->name(),
            'nobp' => fake()->bothify('##########'),
            'email' => fake()->unique()->safeEmail(),
            'jurusan' => fake()->randomElement(['Teknik Informatika', 'Teknologi Rekasaya Perangkat', 'Teknik Komputer']),
            'prodi' => fake()->randomElement(['SI', 'TI', 'TK']),
            'alamat' => fake()->address()
        ];
    }
}
