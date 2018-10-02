<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class GuestHttpTest extends TestCase
{
    public function testGetHomePageAsGuest()
    {
        $response = $this->get('/home');

        $response->assertStatus(200);
    }

    public function testGetAdminDashboardPageAsGuest()
    {
        $response = $this->get('/dashboard');

        $response->assertStatus(404);
    }

    public function testGetUserDashboardPageAsGuest()
    {
        $response = $this->get('/u');

        $response->assertStatus(302);
    }

    public function testGetUserPastBookingPageAsGuest()
    {
        $response = $this->get('/u/bookings');

        $response->assertStatus(302);
    }
}
