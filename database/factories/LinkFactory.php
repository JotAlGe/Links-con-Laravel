<?php

namespace Database\Factories;

use App\Models\Link;
use Illuminate\Database\Eloquent\Factories\Factory;

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
        return [
            'title' => $this->faker->name(),
            'url' => $this->faker->url(),
            'description' => $this->faker->paragraph()
        ];
    }
}
