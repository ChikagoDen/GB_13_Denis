<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySrrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert($this->getDate());
    }

    private function getDate()
    {
        $faker = Factory::create('ru_RU');
        $date = [];
        for( $i=0; $i<4; $i++)
        {
            $date[] = [
                'Title'=>$faker->sentence(mt_rand(1,5)),
                'Discription'=>$faker->text(mt_rand(10,20)),
            ];
        }
        return $date;
    }
}
