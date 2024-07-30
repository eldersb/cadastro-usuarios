<?php

namespace Database\Factories;

use Ilfluminate\Database\Eloquent\Factories\Factory;
use App\Models\Produto;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class ProdutosFactory extends Factory
{

    protected $model = Produto::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
                "categoria_id" => fake()->numberBetween(1, 5),
                "name" => fake()->word(),
                "descricao" => fake()->sentence(),
                "preco" => fake()->randomFloat(2, 10, 100),
        ];
    }
}
