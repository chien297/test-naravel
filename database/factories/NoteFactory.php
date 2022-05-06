<?php

namespace Database\Factories;

use App\Models\Note;
use Illuminate\Database\Eloquent\Factories\Factory;

class NoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */

     protected $model = Note::class;
    public function definition()
    {
        return [
            //
            'name' => $this->faker->name.'@gmail.com',
            'text' => $this->faker->text

        ];
    }
}
