<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;


class CompanyCategorySeeder extends Seeder
{

    public function run(): void
    {
        DB::table('company_categories')->insert([
            ['name' => 'Proprietorship',
             'created_by'=>1,
             'created_date'=>date('Y-m-d:h:i:s'),
             'modified_by'=>null,
             'modified_date'=>null

            ],
            ['name' => 'Partnership',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Pvt Ltd',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Public Ltd',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Government',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null],

            ['name' => 'Non-Profit',
            'created_by'=>1,
            'created_date'=>date('Y-m-d:h:i:s'),
            'modified_by'=>null,
            'modified_date'=>null]

        ]);

    }
}
