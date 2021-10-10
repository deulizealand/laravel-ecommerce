<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'product_name' => $this->faker->name(),
            'product_price' => $this->faker->randomDigit,
            'product_stock' => $this->faker->randomDigit,
            'product_status' => $this->faker->randomDigit,
            'image_url' => $this->faker->image('public/storage/image',400,300),
        ];
    }
}
