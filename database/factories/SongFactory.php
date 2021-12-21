<?php

namespace Database\Factories;

use App\Models\Song;
use Illuminate\Database\Eloquent\Factories\Factory;

class SongFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Song::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
//            'name' => $this->faker->word,
//            'description' => $this->faker->sentence,
//            'duration' => $this->faker->time,
//            'artist' => $this->faker->name
        ];
    }
}
