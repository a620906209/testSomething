<?php

namespace Database\Factories;
use app\Models\Items;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class ItemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model= Items::class;

    public function definition()
    {
        return [
            //
            'item_name' => $this->faker->name,
            'item_price' => $this->faker->numberBetween(100,999),
        ];
    }
}
