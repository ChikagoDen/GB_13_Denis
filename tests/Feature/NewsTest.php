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
    public function testNewsAvalibel()
    {
        $response = $this->get('/news');

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
            'name'=>"test title",
            'author'=>"Den"
        ];
        $response=$this->post(route('admin.news.store'), $responseData);
        $response->assertJson($responseData);
    }
}
