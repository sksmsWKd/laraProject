<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class AuthControllerTest extends TestCase
{

    use RefreshDatabase, WithFaker;
    //db안에 데이터 들어갔다가 테스팅 끝나면 기존의 데이터 삭제 




    public function test_a_user_can_register()
    {
        $response = $this->post('/api/register');
        $response->assertStatus(201);
        $this->assertDatabaseHas('users', []);
    }
}
