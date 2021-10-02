<?php

namespace Database\Factories;

use App\Models\Products;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ProductsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Products::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'sku' => Str::random(8),
            'description' => $this->faker->paragraph(),
            'saveur' => $this->faker->name(),
            'picture' => 'https://picsum.photos/200',
            'status' => true,
        ];
    }
}
