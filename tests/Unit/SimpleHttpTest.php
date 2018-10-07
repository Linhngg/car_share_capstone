<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class SimpleHttpTest extends TestCase
{
    use RefreshDatabase;

    public function testRootPage()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    public function testNonExistingUrl()
    {
        $response = $this->get('/uansjas');

        $response->assertStatus(404);
    }
}
