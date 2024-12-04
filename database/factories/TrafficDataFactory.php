<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\TrafficData>
 */
class TrafficDataFactory extends Factory {
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            //
            'visitor_id' => $this->faker->uuid(),
            'ip_address' => $this->faker->ipv4(),
            'country' => $this->faker->country(),
            'device_type' => $this->faker->randomElement(['desktop', 'mobile', 'tablet']),
            'browser' => $this->faker->randomElement(['chrome', 'firefox', 'safari', 'edge']),
            'page_visited' => config('app.url') . '/' . $this->faker->randomElement(['home', 'partecipa']),
            'referrer' => $this->faker->optional()->url(),
            'session_duration' => $this->faker->numberBetween(1, 3600),
            'session_start' => $this->faker->dateTimeThisYear(),
        ];
    }
}
