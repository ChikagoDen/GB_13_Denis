<?php

namespace Database\Seeders;

use Facade\Ignition\Support\FakeComposer;
use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NewsSrrder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('News')->insert($this->getDate());

    }
    private function getDate()
    {
        $faker = Factory::create('ru_RU');
        $date = [];
        for( $i=0; $i<10; $i++)
        {
            $date[] = [
                'Title'=>$faker->sentence(mt_rand(3,10)),
                'Discription'=>$faker->text(mt_rand(100,200)),
                'DiscriptionCorotco'=>$faker->text(mt_rand(10,50)),
                'fk_categori_id'=>mt_rand(1,4),
                'Avtor'=>$faker->sentence(mt_rand(1,2)),
                'FK_Category'=>1,
            ];
        }
        return $date;
    }
}
