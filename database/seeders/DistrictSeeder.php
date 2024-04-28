<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class DistrictSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('districts')->insert([
            [
                'name' => 'Ariyalur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Chengalpattu',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],

            [
                'name' =>'Chennai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],

            [
                'name' =>'Coimbatore',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Cuddalore',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Dharmapuri',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Dindigul',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Erode',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Kallakurichi',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Kanchipuram',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Kanyakumari',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Karur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Krishnagiri',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Madurai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Mayiladuthurai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Nagapattinam',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Namakkal',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>  'Perambalur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>  'Pudukkottai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Ramanathapuram',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Ranipet',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Salem',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Sivagangai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Tenkasi',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Thanjavur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'The Nilgiris',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Theni',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Thiruvallur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Thiruvarur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Thoothukudi',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Tiruchirappalli',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Tirunelveli',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Tirupathur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' => 'Tiruppur',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Tiruvannamalai',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Vellore',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Viluppuram',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ],
            [
                'name' =>'Virudhunagar',
                'created_by' => 1,
                'created_date' => date('Y-m-d:h:i:s'),
                'modified_by' => null,
                'modified_date' => null
            ]
        ]);
    }
}
