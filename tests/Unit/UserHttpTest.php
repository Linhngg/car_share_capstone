<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserHttpTest extends TestCase
{
    public function testGetHomePageAsUser()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/home');

        $response->assertStatus(200);
    }

    public function testGetAdminDashboardPageAsUser()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/dashboard');

        $response->assertStatus(404);
    }

    public function testGetUserDashboardPageAsUser()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/u');

        $response->assertStatus(200);
    }

    public function testGetUserPastBookingPageAsUser()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/u/bookings');

        $response->assertStatus(200);
    }
    public function testGetNonExistPageAsUser()
    {    $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);
            $response = $this->actingAs($user)->get('/NotExist');

            $response->assertStatus(404);
    }

    public function testGetWelcomePageAsUser()
    {
        $user = factory(User::class)->create([
            'current_booking_id' => -1,
            'type' => User::DEFAULT_TYPE
        ]);

        $response = $this->actingAs($user)
            ->get('/');

        $response->assertStatus(200);
    }
}
