<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class LinkFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = Link::class;
    public function definition()
    {
        $title = $this->faker->name();
        return [
            'title' => $title,
            'slug' => Str::slug($title, '-'),
            'description' => $this->faker->paragraph()
        ];
    }
}
