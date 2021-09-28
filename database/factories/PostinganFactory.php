<?php

namespace Database\Factories;

use App\Models\Postingan;
use Illuminate\Database\Eloquent\Factories\Factory;

class PostinganFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Postingan::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence(mt_rand(2, 8)),
            'slug' => $this->faker->slug(),
            'author' => $this->faker->name(),
            'isi' => $this->faker->paragraph(),
            //'body' => $this->faker->paragraphs(mt_rand(5, 10)),
            'body' => collect($this->faker->paragraphs(mt_rand(5, 10)))
                ->map(fn ($p) => "<p>$p</p>")
                ->implode(''),
            'user_id' => mt_rand(1, 2),
            'kategori_id' => mt_rand(1, 2)
        ];
    }
}
