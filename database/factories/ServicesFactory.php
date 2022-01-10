<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ServicesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
           'brief'=> $this->faker->text(),
           'title'=>$this->faker->name(),
           'content'=>$this->faker->text(),
           'features'=>$this->faker->text(),
        ];
    }
}
