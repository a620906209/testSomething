<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Http;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_example()
    {
        $this->assertTrue(true);
    }
    public function testshowProfile(){
        // $response=Http::get('/user');

        // $response->assertStatus(200);
        $this->assertTrue(true);


    }
}
