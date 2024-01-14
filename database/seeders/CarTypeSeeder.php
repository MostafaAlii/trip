<?php

namespace Database\Seeders;

use App\Models\CarType;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class CarTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        DB::table('car_types')->truncate();

        CarType::create([
            'name' => 'سيدان',
            'status' => true,
//            'price_normal'=>50,
//            'price_premium'=>75,
        ]);

        CarType::create([
            'name' => 'Suv',
            'status' => true,
//            'price_normal'=>65,
//            'price_premium'=>85,
        ]);



        Schema::enableForeignKeyConstraints();
    }
}
