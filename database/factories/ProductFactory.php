<?php

namespace Database\Factories;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Warehouse;
use Faker\Generator as Faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'price' => $this->faker->randomFloat(2, 0, 100),
            'supplier_id' => Supplier::factory(),
            'warehouse_id' => Warehouse::factory(),
        ];
    }
}