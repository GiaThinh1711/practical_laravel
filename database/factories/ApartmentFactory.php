<?php

namespace Database\Factories;

use App\Models\Apratment;
use Illuminate\Database\Eloquent\Factories\Factory;

class ApartmentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Apratment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            "name"=>$this->faker->name(),
            "price"=>$this->faker->price(),
            "address"=>$this->faker->address(),
            "status"=>$this->faker->status(),
        ];
    }
}
