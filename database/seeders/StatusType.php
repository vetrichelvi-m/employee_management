<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
class StatusType extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('status_types')->insert([
            ['name' => 'Employee',
             'created_by'=>1,
             'created_date'=>date('Y-m-d:h:i:s'),
             'modified_by'=>null,
             'modified_date'=>null

            ],
            ['name' => 'Payment',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Project',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Support',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Finance',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Daily Tasks',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null]

        ]);
    }
}
