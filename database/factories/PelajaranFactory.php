<?php

namespace Database\Factories;
use App\Models\Pelajaran;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pelajaran>
 */
class PelajaranFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_pelajaran' => $this->faker->word,
            // Increase the range of possible unique values
            'kode_pelajaran' => $this->faker->unique()->numerify('PLJ########'),
        ];
    }
}
