<?php

use Illuminate\Database\Seeder;
use App\Models\Department;

class DepartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Department::truncate();
        Department::insert([

            [
                'id'          			=> '1',
                'department_name' 		=>'CSTE',
            ],

            [
                'id'          			=> '2',
                'department_name' 		=>'ACCE',

            ],

            [
                'id'          			=> '3',
                'department_name' 		=>'ICE',

            ],

            [
                'id'          			=> '4',
                'department_name' 		=>'EEE',

            ],
            [
                'id'          			=> '5',
                'department_name' 		=>'FIMS',

            ],

            [
                'id'          			=> '6',
                'department_name' 		=>'Pharmacy',

            ],
            [
                'id'          			=> '7',
                'department_name' 		=>'MBG',

            ],

            [
                'id'          			=> '8',
                'department_name' 		=>'Applied MATH',

            ],
            [
                'id'          			=> '9',
                'department_name' 		=>'Statistics',

            ],

            [
                'id'          			=> '10',
                'department_name' 		=>'FTNS',
            ],

            [
                'id'          			=> '11',
                'department_name' 		=>'ESDM',
            ],

            [
                'id'          			=> '12',
                'department_name' 		=>'BGE',
            ],
            [
                'id'          			=> '13',
                'department_name' 		=>'AG',
            ],

            [
                'id'          			=> '14',
                'department_name' 		=>'Oceanography',
            ],
            [
                'id'          			=> '15',
                'department_name' 		=>'BMB',
            ],

            [
                'id'          			=> '16',
                'department_name' 		=>'Economics',
            ],

            [
                'id'          			=> '17',
                'department_name' 		=>'Zoology',
            ],

            [
                'id'          			=> '18',
                'department_name' 		=>'BLWS',
            ],
            [
                'id'          			=> '19',
                'department_name' 		=>'Sociology',
            ],

            [
                'id'          			=> '20',
                'department_name' 		=>'English',
            ],
            [
                'id'          			=> '21',
                'department_name' 		=>'Bangla',
            ],

            [
                'id'          			=> '22',
                'department_name' 		=>'Social Welfare',
            ],
            [
                'id'          			=> '23',
                'department_name' 		=>'DBA',
            ],

            [
                'id'          			=> '24',
                'department_name' 		=>'THM',
            ],
            [
                'id'          			=> '25',
                'department_name' 		=>'MIS',
            ],

            [
                'id'          			=> '26',
                'department_name' 		=>'Education',
            ],
            [
                'id'          			=> '27',
                'department_name' 		=>'DEA',
            ],

            [
                'id'          			=> '28',
                'department_name' 		=>'Law',
            ]

        ]);
    }
}
