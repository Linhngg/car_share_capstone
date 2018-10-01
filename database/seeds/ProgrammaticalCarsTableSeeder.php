<?php

use Illuminate\Database\Seeder;

class ProgrammaticalCarsTableSeeder extends Seeder
{
    public function run()
    {
        $car_models = [
            'Holden Commodore',
            'Mazda 3NEO',
            'Volkswagen Polo',
            'Hyundai i30',
            'BMW 335i M Sport',
            'Jeep Grand Cherokee',
            'Nissan X-Trail',
            'Toyota Kluger GX',
            'Mercedes-Benz GLE350 d Auto 4MATIC',
            'Ford Falcon XR6',
            'Toyota RAV4 GX',
            'Ford Mustang GT FM',
            'Porsche Cayman GTS 981',
            'Subaru Outback 2.5i 4GEN',
            'Subaru XV 2.0i-S G4X',
            'Land Rover Range Rover Sport TDV6',
            'Holden Cruze CDX JH Series II',
            'Kia Carnival S Auto',
            'Holden Trax LTZ TJ',
            'Ford Ranger XL PX MkII Auto 4x4'
        ];

        $car_brands = [
            'Holden',
            'Mazda',
            'Volkswagen',
            'Hyundai',
            'BMW',
            'Jeep',
            'Nissan',
            'Toyota',
            'Mercedes-Benz',
            'Ford',
            'Toyota',
            'Ford',
            'Porsche',
            'Subaru',
            'Subaru',
            'Land Rover',
            'Holden',
            'Kia',
            'Holden',
            'Ford'
        ];

        $seats = [2, 5, 7];

        $features = [
            'child-seat',
            'gps',
            'bike-rack',
            'wheelchair',
            'cruise-control',
            'roof-rack'
        ];

        $serviceIntervals = [10000, 12000, 15000, 18000, 20000];

        $odometers = [74960, 183210, 165717, 284376, 344071, 81018, 235623, 67493];

        $carparks_lat = [
            -37.818632,
            -37.819471,
            -37.81941,
            -37.825216,
            -37.827936,
            -37.820654,
            -37.822555,
            -37.832006,
            -37.829154,
            -37.821551,
            -37.808364,
            -37.818087,
            -37.810131,
            -37.810086,
            -37.811317,
            -37.811768,
            -37.810735,
            -37.812423,
            -37.815737,
            -37.813017,
        ];

        $carparks_long = [
            144.961603,
            144.950834,
            144.955933,
            144.949696,
            144.953738,
            144.965318,
            144.967098,
            144.96919,
            144.970721,
            144.965541,
            144.966997,
            144.964241,
            144.966364,
            144.970522,
            144.963358,
            144.970122,
            144.96927,
            144.970032,
            144.960702,
            144.958348
        ];

        $price_rates = [
            1,
            2.5,
            5,
            7.5,
            10
        ];

        for ($i = 0; $i < 51; $i++) {
            $odometer = $odometers[rand(0, count($odometers)-1)];
            $serviceInterval = $serviceIntervals[rand(0, count($serviceIntervals)-1)];
            $car_features = array();
            for ($j = 0; $j < rand(1, 3); $j++) {
                array_push($car_features, $features[rand(0, count($features)-1)]);
            }
            $car_features = array_unique($car_features);
            $model_index = rand(0, count($car_models)-1);
            $carpark_index = rand(0, count($carparks_lat)-1);
            $price_rate_index = rand(0, count($price_rates)-1);

            DB::table('cars')->insert([
                'model' => $car_models[$model_index],
                'brand' => $car_brands[$model_index],
                'status' => 1,
                'lat' => $carparks_lat[$carpark_index],
                'long' => $carparks_long[$carpark_index],
                'odometer' => $odometer,
                'seats' => $seats[rand(0, count($seats)-1)],
                'lastServiceOdometer' => $odometer - rand(0, $serviceInterval),
                'serviceInterval' => $serviceInterval,
                'lastServiceDate' => date('Y-m-d', strtotime('-5 days', strtotime('2018-9-7'))),
                'created_at' => date("Y-m-d"),
                'updated_at' => date("Y-m-d"),
                'features' => json_encode($car_features),
                'price_rate' => $price_rates[$price_rate_index]
            ]);
        }
    }
}
