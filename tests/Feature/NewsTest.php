<?php

namespace Tests\Feature;

use App\Models\Category;
use App\Models\News;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class NewsTest extends TestCase
{
    // use RefreshDatabase;
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
        $response=$this->get(route("news.show", ["id"=>mt_rand(1,4)]));
        $response->assertStatus(200);
    } 
    public function testCategoryShow()
    {
        $response=$this->get(route("news.categoryShow", ["category"=>"Категория 1."])); //проверка на категории
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
 
    public function testNewsAdminCreated()
    {
        $category=Category::factory()->create();
        $responseData =News::factory()->definition();

        $responseData=$responseData+['fk_categori_id'=>$category->id];
        // $responseData=[
        //     // 'fk_categori_id'=>3,
        //     'Title'=>'test title',
        //     'Avtor'=>'Denver',
        //     'Status'=>'Черновик',
        //     'Discription'=>'Bllaa bla bla ',
        //     'DiscriptionCorotco'=>'berwjndfkjn',
            
        // ];
        $response=$this->post(route('admin.news.store'), $responseData);
        $response->assertStatus(302);
    }
    public function testCategoryAdminCreated()
    {
        $category=Category::factory()->definition();

        $responseData=$category;
        $response=$this->post(route('admin.category.store'), $responseData);
        $response->assertStatus(302);
    }
}
