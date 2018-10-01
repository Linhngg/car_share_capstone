<?php

use Illuminate\Database\Seeder;

class CarparksTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('carparks')->insert([
            'lat' => -37.818632,
            'long' => 144.961603,
            'name' => 'Secure Parking',
            'address' => '376 Flinders Street Car Park'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.819471,
            'long' => 144.950834,
            'name' => 'Secure Parking',
            'address' => '522 Flinders Lane Car Park'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.819410,
            'long' => 144.955933,
            'name' => 'Secure Parking',
            'address' => '522 Flinders Lane Car Park'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.825216,
            'long' => 144.949696,
            'name' => 'Wilson Parking',
            'address' => 'South Wharf  20 Convention Centre Pl'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.827936,
            'long' => 144.953738,
            'name' => 'Ace Parking',
            'address' => '1-3 Meaden St, Southbank'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.820654,
            'long' => 144.965318,
            'name' => 'Southgate Car Park',
            'address' => 'Southgate Ave, Southbank'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.822555,
            'long' => 144.967098,
            'name' => 'The Australian Ballet Centre Car Park',
            'address' => '2 Kavanagh St, Southbank '
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.832006,
            'long' => 144.969190,
            'name' => 'Secure Parking',
            'address' => '21 Bank Street Car Park'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.829154,
            'long' => 144.970721,
            'name' => 'Secure Parking',
            'address' => '23 Coventry St , Southbank'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.821551,
            'long' => 144.965541,
            'name' => 'Wilson Parking',
            'address' => '62 City Road, Southbank'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.808364,
            'long' => 144.966997,
            'name' => 'Wilson Parking',
            'address' => '62 La Trobe St, Melbourne VIC 3000'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.818087,
            'long' => 144.964241,
            'name' => 'Secure Parking',
            'address' => '300 Flinders Street Car Park, CBD'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.810131,
            'long' => 144.966364,
            'name' => 'Secure Parking',
            'address' => 'QV Car Park - 180 Lonsdale St, Melbourne'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.810086,
            'long' => 144.970522,
            'name' => 'Secure Parking',
            'address' => '59 Lonsdale Street, CBD'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.811317,
            'long' => 144.963358,
            'name' => 'Wilson Parking',
            'address' => 'Melbourne Central - 300 Lonsdale St, Melbourne'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.811768,
            'long' => 144.970122,
            'name' => 'Paramount Carpark',
            'address' => '163 Exhibition St'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.810735,
            'long' => 144.969270,
            'name' => 'Smythe Ln Garage',
            'address' => 'Smythe Ln, Melbourne CBD'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.812423,
            'long' => 144.970032,
            'name' => 'Secure Parking',
            'address' => 'Southern Cross Tower, 121 Exhibition St, CBD'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.815737,
            'long' => 144.960702,
            'name' => 'Secure Parking',
            'address' => '412 Little Collins St, Melbourne'
        ]);

        DB::table('carparks')->insert([
            'lat' => -37.813017,
            'long' => 144.958348,
            'name' => 'Secure Parking',
            'address' => '460 Lonsdale St'
        ]);
    }
}
