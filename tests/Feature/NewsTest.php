<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testIndex()
    {
        $response = $this->get('/index');

        $response->assertStatus(200);
    }     
    public function testCategory()
    {
        $response = $this->get('/category');

        $response->assertStatus(200);
    }
    public function testAutorize()
    {
        $response = $this->get('/autorize');

        $response->assertStatus(200);
    }
    public function testNewsShow()
    {
        $response=$this->get(route("news.show", ["id"=>mt_rand(1,5)]));
        $response->assertStatus(200);
    } 
    public function testCategoryShow()
    {
        $response=$this->get(route("news.categoryShow", ["category"=>"Спорт"])); //проверка на категории
        $response->assertStatus(200);
    } 
    
//Админ

    public function testAdminCategory()
    {
        $response = $this->get('/admin/category');

        $response->assertStatus(200);
    } 
    public function testAdminCategoryCreate()
    {
        $response = $this->get('/admin/category/create');

        $response->assertStatus(200);
    }
    public function testAdminNewsCreate()
    {
        $response = $this->get('/admin/news/createNews');

        $response->assertStatus(200);
    }
 
    public function testNewsAdminAvalibel()
    {
        $response = $this->get('/admin/news');

        $response->assertStatus(200);
    }
        public function testNewsAdminShow()
    {
        $response=$this->get(route("news.show", ["id"=>mt_rand(1,5)]));
        $response->assertStatus(200);
    }
 
    public function testNewsAdminCreated()
    {
        $responseData=[
            'name'=>'test title',
            'avtor'=>'Den'
        ];
        $response=$this->post(route('admin.news.store'), $responseData);
        $response ->assertJson($responseData)
                  ->assertStatus(200);
    }

}
