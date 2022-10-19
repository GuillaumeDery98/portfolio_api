<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Link;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory()->create();
        \App\Models\Project::factory(10)->create();
        \App\Models\Message::factory(5)->create();
        \App\Models\JobOffer::factory(5)->create();

        Link::create([
            'name' => 'GitHub',
            'url' => 'https://github.com/GuillaumeDery98',
            'icon' => 'fa-brands fa-github'
        ]);
        Link::create([
            'name' => 'Linkedin',
            'url' => 'https://www.linkedin.com/in/guillaume-dery/',
            'icon' => 'fa-brands fa-linkedin'
        ]);
        Link::create([
            'name' => 'Facebook',
            'url' => 'https://www.facebook.com/GDY76/',
            'icon' => 'fa-brands fa-facebook'
        ]);
        Link::create([
            'name' => 'Instagram',
            'url' => 'https://www.instagram.com/deryguillaume/',
            'icon' => 'fa-brands fa-instagram'
        ]);
    }
}
