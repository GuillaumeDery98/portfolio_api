<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    protected $model = Project::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->text(),
            'client' => json_encode([
                'work_for' => "Cherry Pulp",
                'name' => fake()->name(),
                'website' => fake()->url(),
            ]),
            'objective' => fake()->text(250),
            'challenge' => fake()->text(1000),
            'tools' => fake()->sentence(5)
        ];
    }
}
