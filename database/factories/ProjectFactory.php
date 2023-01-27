<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Entities\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'client_id'=>rand(1,10),
            'name'=> $this->faker->word,
            'description'=> $this->faker->sentence,
            'progress'=> rand(1,100),
            'status'=> rand(1,3),
            'due_date'=> $this->faker->dateTime('now'),

        ];
    }
}
