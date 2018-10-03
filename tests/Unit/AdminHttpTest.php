<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class AdminHttpTest extends TestCase
{
    public function testGetAdminDashboardPageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(200);
    }
}
