<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TrafficDataSeeder extends Seeder {
    /**
     * Run the database seeds.
     */
    public function run(): void {
        //
        \App\Models\TrafficData::factory(1000)->create();
    }
}
