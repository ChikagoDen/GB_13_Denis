<?php declare(strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function getNews()
    {
        $faker =Factory::create();
        $news = [];
        for($i = 0; $i < 5; $i++)
        {
            $news[] = [
                'id' => $i,
                'title' => $faker->jobTitle(),
                'discription' => $faker->text( ),
                'author' => $faker->userName()
            ];
        }
        return $news;
    }

    public function getNewsById(int $id)
    {
        $faker =Factory::create();
        return [
                'id' => $id,
                'title' => $faker->jobTitle(),
                'discription' => $faker->text( ),
                'author' => $faker->userName()
            ];
    }

    public function getNewsCategory()
    {
        $array=array(
            "Спорт"=> array($this->getNews()),
            "Развлечение"=> array($this->getNews()),
            "Новости дня"=> array($this->getNews()),
            "Кулинария"=> array($this->getNews()),
            "Экономика "=> array($this->getNews()),
        );
        return $array;
    }

    public function getNewsCategoryHistory(string $category)
    {
        $array=$this->getNewsCategory();
        return $array[$category];
    }
}
