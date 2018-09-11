<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('cars')->insert([
            'model' => "Holden Commodore",
            'status' => 1,
            'lat' => -37.808364,
            'long' => 144.966997,
            'odometer' => 10000,
            'lastServiceOdometer' => 9000,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-11'))),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);

        DB::table('cars')->insert([
            'model' => "Mazda 3NEO",
            'status' => 1,
            'lat' => -37.810131,
            'long' => 144.966364,
            'odometer' => 121312,
            'lastServiceOdometer' => 74223,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-11'))),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);

//        //Another car
//        DB::table('cars')->insert([
//            'model' => "Mazda 3NEO",
//            'status' => 1,
//            'lat' => -37.810131,
//            'long' => 144.966364,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//	    //Another car
//        DB::table('cars')->insert([
//            'model' => "Volkswagen Polo",
//            'status' => 1,
//            'lat' => -37.810086,
//            'long' => 144.970522,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//	    //Another car
//        DB::table('cars')->insert([
//            'model' => "Hyundai i30",
//            'status' => 1,
//            'lat' => -37.811317,
//            'long' => 144.963358,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//
//	    //Another car
//        DB::table('cars')->insert([
//            'model' => "BMW 335i M Sport",
//            'status' => 1,
//            'lat' => -37.811768,
//            'long' => 144.970122,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//	    //Another car
//        DB::table('cars')->insert([
//            'model' => "Jeep Grand Cherokee",
//            'status' => 1,
//            'lat' => -37.810735,
//            'long' => 144.969270,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//            //Another car
//        DB::table('cars')->insert([
//            'model' => "Nissan X-Trail",
//            'status' => 1,
//            'lat' => -37.812423,
//            'long' => 144.970032,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//	       //Another car
//        DB::table('cars')->insert([
//            'model' => "Toyota Kluger GX",
//            'status' => 1,
//            'lat' => -37.815737,
//            'long' => 144.960702,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//	       //Another car
//        DB::table('cars')->insert([
//            'model' => "Mercedes-Benz GLE350 d Auto 4MATIC",
//            'status' => 1,
//            'lat' => -37.813017,
//            'long' => 144.958348,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
//
//       //Another car
//        DB::table('cars')->insert([
//            'model' => "Ford Falcon XR6",
//            'status' => 1,
//            'lat' => -37.818087,
//            'long' => 144.964241,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);

    }
}
