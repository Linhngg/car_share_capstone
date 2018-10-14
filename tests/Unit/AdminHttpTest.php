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

    public function testGetAdminMapSimulationAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/maps');

        $response->assertStatus(200);
    }

    public function testGetAdminBookingsPageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/bookings');

        $response->assertStatus(200);
    }

    public function testGetAdminServicePageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/service');

        $response->assertStatus(200);
    }

    public function testGetAdminRetirePageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/retire');

        $response->assertStatus(200);
    }
    public function testGetWelcomePageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/');

        $response->assertStatus(200);
    }

    public function testGetNonExistPageAsAdmin()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::ADMIN_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/notExist');

        $response->assertStatus(404);
    }

}
