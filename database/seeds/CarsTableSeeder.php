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
        //For each car
        //Need to change model, lat and long
        DB::table('cars')->insert([
            'model' => "TEst 1",
            'status' => 1,
            'lat' => 1.1,
            'long' => 1.1,
            'created_at' => date("Y-m-d H:i:s"),
            'updated_at' => date("Y-m-d H:i:s"),
        ]);

        //Another car
//        DB::table('cars')->insert([
//            'model' => "TEst 1",
//            'status' => 1,
//            'lat' => 1.1,
//            'long' => 1.1,
//            'created_at' => date("Y-m-d H:i:s"),
//            'updated_at' => date("Y-m-d H:i:s"),
//        ]);
    }
}
