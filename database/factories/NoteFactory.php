<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * Class NoteFactory
 * @package Database\Factories
 */
class NoteFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     * @var string
     */
    protected $model = Note::class;

    /**
     * Define the model's default state.
     * @return array
     */
    public function definition ()
    {
        return
            [
                'text' => $this->faker->text(140),
                'title' => $this->faker->name(),
                'user_id' => 1,
                'tag_id' => 1, // password
            ];

    }
}
