<?php
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\ModelMahasiswa;

class ModelMahasiswaFactory extends Factory
{
    protected $model = ModelMahasiswa::class;

    public function definition(): array
    {
        return [
            'nama' => $this->faker->name(),
            'nobp' => $this->faker->unique()->numerify('##########'),
            'email' => $this->faker->unique()->safeEmail(),
            'jurusan' => $this->faker->randomElement(['Teknik Informatika', 'Teknologi Rekasaya Perangkat', 'Teknik Komputer']),
            'prodi' => $this->faker->randomElement(['SI', 'TI', 'TK']),
            'alamat' => $this->faker->address()
        ];
    }
}
