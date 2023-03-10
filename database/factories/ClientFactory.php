<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Entities\Model>
 */
class ClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>$this->faker->name,
            'responsible'=> $this->faker->name,
            'email'=> $this->faker->email,
            'phone'=> $this->faker->phoneNumber,
            'address'=> $this->faker->address,
            'obs'=> $this->faker->sentence,
        ];
    }
}
