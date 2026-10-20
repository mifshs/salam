<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StatusSeeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('statuses')->insert(
            [
                [
                    'name' => 'new'
                ],
                [
                    'name' => 'confirmed'
                ],
                [
                    'name' => 'denied'
                ]
            ]
        );
    }
}
