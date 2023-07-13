<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\House;

class HouseTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $house = new House();

        $house -> code = '22903874';
        $house -> address = 'test add';
        $house -> postal_code = '4343';
        $house -> city = 'my city';
        $house -> state = 'my state';
        $house -> square_meters = 100;
        $house -> rooms = 10;
        $house -> bathrooms = 20;
        $house -> type = 'condominio';
        $house -> description = 'my desc';
        $house -> price = 200000;
        $house -> is_available = true;

        $house -> save();

        House :: factory() -> count(100) -> create();
    }
}
