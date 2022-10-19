<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Guillaume Dery",
            'email' => "dery.guillaume98@outlook.fr",
            'email_verified_at' => now(),
            'password' => Hash::make(env('PASSWORD')), // password
            'remember_token' => null,
            'address' => "360 Chaussée Saint-Pierre 1040 Etterbeek",
            'phone' => "+32486162239",
            'biography' => "Développeur web fort de plusieurs années d'expérience, je suis passionné par les technologies de l'information depuis mon plus jeune âge. L'apprentissage continu qu'impose ce métier correspond parfaitement à ma personnalité: soif d'apprendre et d'évoluer en permanence. J'aimerais maintenant vous apporter ma contribution dans des technologies comme Laravel.",
            'picture' => "sqdcffqs",
            'cv' => "sqdqsd",
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
