<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produk>
 */
class ProdukFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $listKategori = ['Akrilik', 'Buket', 'Simple Frame', '3D Frame'];
        $kategori = Arr::random($listKategori);
        return [
            'nama' => $this->faker->name(),
            'kategori' => $kategori,
            'deskripsi' => $this->faker->paragraph(),
            'harga' => $this->faker->randomNumber(5, true),
            'link_toko' => $this->faker->url(),
            'link_wa' => $this->faker->url(),
            'klik' => 0,
        ];
    }
}
