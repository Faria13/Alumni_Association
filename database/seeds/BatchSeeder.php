<?php

use Illuminate\Database\Seeder;
use App\Models\Batch;

class BatchSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Batch::truncate();
        Batch::insert([

            [
                'id'          => '1',
                'batch_name'  => '1st batch',
            ],

            [
                'id'          => '2',
                'batch_name'  => '2nd batch',
            ],

            [
                'id'          => '3',
                'batch_name'  => '3rd batch',
            ],

            [
                'id'          => '4',
                'batch_name'  => '4th batch',
            ],
            [
                'id'          => '5',
                'batch_name'  => '5th batch',
            ],

            [
                'id'    => '6',
                'batch_name'  => '6th batch',
            ],
            [
                'id'          => '7',
                'batch_name'  => '7th batch',
            ],

            [
                'id'    => '8',
                'batch_name'  => '8th batch',
            ],
            [
                'id'    => '9',
                'batch_name'  => '9th batch',
            ],

            [
                'id'    => '10',
                'batch_name'  => '10th batch',
            ]
        ]);
    }
}
