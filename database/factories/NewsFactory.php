<?php

declare(strict_types=1);
namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class NewsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $title=$this->faker->jobTitle();
        return [
            'Title'=>$title,
            'Avtor'=>$this->faker->userName(),
            'Status'=>'Черновик',
            'Discription'=>$this->faker->text(150),
            'fk_categori_id'=>1,
            'DiscriptionCorotco'=>$this->faker->text(150)
        ];
    }
}
