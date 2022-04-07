<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'from'=>rand(1,5),
            'to'=>rand(1,5),
            'departure_date'=>$this->faker->date(),
            'arrival_date'=>$this->faker->date(),
            'departure_time'=>$this->faker->time(),
            'arrival_time'=>$this->faker->time(),
            'route_no'=>rand(1,5),
            'airline'=>rand(1,5),

        ];
    }
}
