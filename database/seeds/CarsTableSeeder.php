<?php

use Illuminate\Database\Seeder;

class CarsTableSeeder extends Seeder
{
    public function run()
    {
        DB::table('cars')->insert([
            'model' => "Holden Commodore",
            'status' => 1,
            'lat' => -37.808364,
            'long' => 144.966997,
            'odometer' => 50670,
            'lastServiceOdometer' => 40670,
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
            'odometer' => 343134,
            'lastServiceOdometer' => 331134,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-11'))),
            'created_at' => date("Y-m-d"),
            'updated_at' => date("Y-m-d"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Volkswagen Polo",
            'status' => 1,
            'lat' => -37.810086,
            'long' => 144.970522,
            'odometer' => 399898,
            'lastServiceOdometer' => 379898,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-10'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Hyundai i30",
            'status' => 1,
            'lat' => -37.811317,
            'long' => 144.963358,
            'odometer' => 409879,
            'lastServiceOdometer' => 399879,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-9'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "BMW 335i M Sport",
            'status' => 1,
            'lat' => -37.811768,
            'long' => 144.970122,
            'odometer' => 416701,
            'lastServiceOdometer' => 404701,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-8'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Jeep Grand Cherokee",
            'status' => 1,
            'lat' => -37.810735,
            'long' => 144.969270,
            'odometer' => 459261,
            'lastServiceOdometer' => 439261,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-7'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Nissan X-Trail",
            'status' => 1,
            'lat' => -37.812423,
            'long' => 144.970032,
            'odometer' => 455674,
            'lastServiceOdometer' => 435674,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-6'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Toyota Kluger GX",
            'status' => 1,
            'lat' => -37.815737,
            'odometer' => 352239,
            'lastServiceOdometer' => 350234,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-5'))),
            'long' => 144.960702,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Mercedes-Benz GLE350 d Auto 4MATIC",
            'status' => 1,
            'lat' => -37.813017,
            'long' => 144.958348,
            'odometer' => 183210,
            'lastServiceOdometer' => 163210,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-4'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Ford Falcon XR6",
            'status' => 1,
            'lat' => -37.818087,
            'long' => 144.964241,
            'odometer' => 74960,
            'lastServiceOdometer' => 64960,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-3'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

     //Another car
        DB::table('cars')->insert([
            'model' => "Toyota RAV4 GX",
            'status' => 1,
            'lat' => -37.818632,
            'long' => 144.961603,
            'odometer' => 165717,
            'lastServiceOdometer' => 157717,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-1'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Ford Mustang GT FM",
            'status' => 1,
            'lat' => -37.819410,
            'long' => 144.955933,
            'odometer' => 284376,
            'lastServiceOdometer' => 276376,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-2'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Porsche Cayman GTS 981",
            'status' => 1,
            'lat' => -37.819471,
            'long' => 144.950834,
            'odometer' => 344071,
            'lastServiceOdometer' => 336071,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-3'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Subaru Outback 2.5i 4GEN",
            'status' => 1,
            'lat' => -37.825216,
            'long' => 144.949696,
            'odometer' => 365258,
            'lastServiceOdometer' => 357258,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-4'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Subaru XV 2.0i-S G4X",
            'status' => 1,
            'lat' => -37.827936,
            'long' => 144.953738,
            'odometer' => 482611,
            'lastServiceOdometer' => 474611,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-5'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Land Rover Range Rover Sport TDV6 ",
            'status' => 1,
            'lat' => -37.820654,
            'long' => 144.965318,
            'odometer' => 81018,
            'lastServiceOdometer' => 73018,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-6'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Holden Cruze CDX JH Series II",
            'status' => 1,
            'lat' => -37.822555,
            'long' => 144.967098,
            'odometer' => 235623,
            'lastServiceOdometer' => 227623,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-7'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Kia Carnival S Auto",
            'status' => 1,
            'lat' => -37.832006,
            'long' => 144.969190,
            'odometer' => 375493,
            'lastServiceOdometer' => 367493,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-8'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Holden Trax LTZ TJ",
            'status' => 1,
            'lat' => -37.829154,
            'long' => 144.970721,
            'odometer' => 433536,
            'lastServiceOdometer' => 425536,
            'serviceInterval' => 20000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-9'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Ford Ranger XL PX MkII Auto 4x4",
            'status' => 1,
            'lat' => -37.821551,
            'long' => 144.965541,
            'odometer' => 454516,
            'lastServiceOdometer' => 446516,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-10'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    DB::table('cars')->insert([
        'model' => "Holden Commodore",
        'status' => 1,
        'lat' => -37.818632,
        'long' => 144.961603,
        'odometer' => 131466,
        'lastServiceOdometer' => 123466,
        'serviceInterval' => 10000,
        'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-2'))),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Mazda 3NEO",
            'status' => 1,
            'lat' => -37.819410,
            'long' => 144.955933,
            'odometer' => 182325,
            'lastServiceOdometer' => 174325,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-6'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Volkswagen Polo",
            'status' => 1,
            'lat' => -37.819471,
            'long' => 144.950834,
            'odometer' => 288845,
            'lastServiceOdometer' => 280845,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-7'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Hyundai i30",
            'status' => 1,
            'lat' => -37.825216,
            'long' => 144.949696,
            'odometer' => 300606,
            'lastServiceOdometer' => 292606,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-2'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "BMW 335i M Sport",
            'status' => 1,
            'lat' => -37.827936,
            'long' => 144.953738,
            'odometer' => 410961,
            'lastServiceOdometer' => 402961,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-3'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Jeep Grand Cherokee",
            'status' => 1,
            'lat' => -37.820654,
            'long' => 144.965318,
            'odometer' => 67055,
            'lastServiceOdometer' => 59055,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-4'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Nissan X-Trail",
            'status' => 1,
            'lat' => -37.822555,
            'long' => 144.967098,
            'odometer' => 246399,
            'lastServiceOdometer' => 238399,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-5'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Toyota Kluger GX",
            'status' => 1,
            'lat' => -37.832006,
            'long' => 144.969190,
            'odometer' => 297768,
            'lastServiceOdometer' => 289768,
            'serviceInterval' => 12000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-9'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Mercedes-Benz GLE350 d Auto 4MATIC",
            'status' => 1,
            'lat' => -37.829154,
            'long' => 144.970721,
            'odometer' => 331657,
            'lastServiceOdometer' => 323657,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-8'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);
        //Another car
        DB::table('cars')->insert([
            'model' => "Ford Falcon XR6",
            'status' => 1,
            'lat' => -37.821551,
            'long' => 144.965541,
            'odometer' => 454516,
            'lastServiceOdometer' => 446516,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-10'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

    DB::table('cars')->insert([
        'model' => "Toyota RAV4 GX",
        'status' => 1,
        'lat' => -37.808364,
        'long' => 144.966997,
        'odometer' => 91101,
        'lastServiceOdometer' => 85101,
        'serviceInterval' => 10000,
        'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-1'))),
        'created_at' => date("Y-m-d H:i:s"),
        'updated_at' => date("Y-m-d H:i:s"),
    ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Ford Mustang GT FM",
            'status' => 1,
            'lat' => -37.810131,
            'long' => 144.966364,
            'odometer' => 145883,
            'lastServiceOdometer' => 139883,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-30'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Porsche Cayman GTS 981",
            'status' => 1,
            'lat' => -37.810086,
            'long' => 144.970522,
            'odometer' => 267089,
            'lastServiceOdometer' => 261089,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-29'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Subaru Outback 2.5i 4GEN",
            'status' => 1,
            'lat' => -37.811317,
            'long' => 144.963358,
            'odometer' => 444012,
            'lastServiceOdometer' => 438012,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-28'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);


	    //Another car
        DB::table('cars')->insert([
            'model' => "Subaru XV 2.0i-S G4X",
            'status' => 1,
            'lat' => -37.811768,
            'long' => 144.970122,
            'odometer' => 487844,
            'lastServiceOdometer' => 481844,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-27'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Land Rover Range Rover Sport TDV6",
            'status' => 1,
            'lat' => -37.810735,
            'long' => 144.969270,
            'odometer' => 107099,
            'lastServiceOdometer' => 101099,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-26'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

            //Another car
        DB::table('cars')->insert([
            'model' => "Holden Cruze CDX JH Series II",
            'status' => 1,
            'lat' => -37.812423,
            'long' => 144.970032,
            'odometer' => 215672,
            'lastServiceOdometer' => 209672,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-25'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	       //Another car
        DB::table('cars')->insert([
            'model' => "Kia Carnival S Auto",
            'status' => 1,
            'lat' => -37.815737,
            'long' => 144.960702,
            'odometer' => 405003,
            'lastServiceOdometer' => 399003,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-24'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	       //Another car
        DB::table('cars')->insert([
            'model' => "Holden Trax LTZ TJ",
            'status' => 1,
            'lat' => -37.813017,
            'long' => 144.958348,
            'odometer' => 463771,
            'lastServiceOdometer' => 457771,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-23'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

       //Another car
        DB::table('cars')->insert([
            'model' => "Ford Ranger XL PX MkII Auto 4x4",
            'status' => 1,
            'lat' => -37.818087,
            'long' => 144.964241,
            'odometer' => 492583,
            'lastServiceOdometer' => 486583,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-22'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);


     DB::table('cars')->insert([
         'model' => "Ford Ranger XL PX MkII Auto 4x4",
         'status' => 1,
         'lat' => -37.808364,
         'long' => 144.966997,
         'odometer' => 331170,
         'lastServiceOdometer' => 325170,
         'serviceInterval' => 10000,
         'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-21'))),
         'created_at' => date("Y-m-d H:i:s"),
         'updated_at' => date("Y-m-d H:i:s"),
     ]);

        //Another car
        DB::table('cars')->insert([
            'model' => "Holden Trax LTZ TJ",
            'status' => 1,
            'lat' => -37.810131,
            'long' => 144.966364,
            'odometer' => 281588,
            'lastServiceOdometer' => 275588,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-20'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Kia Carnival S Auto",
            'status' => 1,
            'lat' => -37.810086,
            'long' => 144.970522,
            'odometer' => 248564,
            'lastServiceOdometer' => 242564,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-19'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Holden Cruze CDX JH Series II",
            'status' => 1,
            'lat' => -37.811317,
            'long' => 144.963358,
            'odometer' => 245060,
            'lastServiceOdometer' => 239060,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-18'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);


	    //Another car
        DB::table('cars')->insert([
            'model' => "Land Rover Range Rover Sport TDV6",
            'status' => 1,
            'lat' => -37.811768,
            'long' => 144.970122,
            'odometer' => 177381,
            'lastServiceOdometer' => 171381,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-17'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	    //Another car
        DB::table('cars')->insert([
            'model' => "Subaru XV 2.0i-S G4X",
            'status' => 1,
            'lat' => -37.810735,
            'long' => 144.969270,
            'odometer' => 206488,
            'lastServiceOdometer' => 200488,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-16'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

            //Another car
        DB::table('cars')->insert([
            'model' => "Subaru Outback 2.5i 4GEN",
            'status' => 1,
            'lat' => -37.812423,
            'long' => 144.970032,
            'odometer' => 225492,
            'lastServiceOdometer' => 219492,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-15'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	       //Another car
        DB::table('cars')->insert([
            'model' => "Porsche Cayman GTS 981",
            'status' => 1,
            'lat' => -37.815737,
            'long' => 144.960702,
            'odometer' => 250423,
            'lastServiceOdometer' => 244423,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-14'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

	       //Another car
        DB::table('cars')->insert([
            'model' => "Ford Mustang GT FM",
            'status' => 1,
            'lat' => -37.813017,
            'long' => 144.958348,
            'odometer' => 458113,
            'lastServiceOdometer' => 452113,
            'serviceInterval' => 15000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-13'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

       //Another car
        DB::table('cars')->insert([
            'model' => "Toyota RAV4 GX",
            'status' => 1,
            'lat' => -37.818087,
            'long' => 144.964241,
            'odometer' => 465160,
            'lastServiceOdometer' => 459160,
            'serviceInterval' => 10000,
            'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-8-12'))),
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);




    }
}
