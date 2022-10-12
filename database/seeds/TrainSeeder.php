<?php

use Illuminate\Database\Seeder;

use App\Train;

class TrainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $trains = [
            [
                'company' => 'Trenitalia',
                'departure_station' => 'Milano',
                'arrival_station' => 'Brescia',
                'departure_time' =>  '12:00:00',
                'arrival_time' => '13:00:00',
                'train_code' => '234954621',
                'carriages_number' => 12,
                'canceled' => false,
                'in_time' => false,
            ],
            [
                'company' => 'Italo',
                'departure_station' => 'Milano',
                'arrival_station' => 'Roma',
                'departure_time' =>  '10:45:00',
                'arrival_time' => '15:30:00',
                'train_code' => '023938271',
                'carriages_number' => 10,
                'canceled' => false,
                'in_time' => true,
            ],
            [
                'company' => 'Trenord',
                'departure_station' => 'Bergamo',
                'arrival_station' => 'Venezia',
                'departure_time' =>  '16:00:00',
                'arrival_time' => '19:10:00',
                'train_code' => '9482273',
                'carriages_number' => 10,
                'canceled' => true,
                'in_time' => false,
            ],
        ];

        foreach ($trains as $train) {
            $newTrain = new Train();
            $newTrain->company = $train['company'];
            $newTrain->departure_station = $train['departure_station'];
            $newTrain->arrival_station = $train['arrival_station'];
            $newTrain->departure_time = $train['departure_time'];
            $newTrain->arrival_time = $train['arrival_time'];
            $newTrain->train_code = $train['train_code'];
            $newTrain->carriages_number = $train['carriages_number'];
            $newTrain->canceled = $train['canceled'];
            $newTrain->in_time = $train['in_time'];

            $newTrain->save();
        }
    }
}
