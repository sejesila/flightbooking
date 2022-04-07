<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Route>
 */
class RouteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'route_from_city'=>rand(1,6),
            'route_to_city'=>rand(1,6),
            'route_economy_fare'=>rand(100,500),
            'route_business_fare'=>rand(300,800),
        ];
    }
}
