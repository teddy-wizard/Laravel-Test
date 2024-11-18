<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Item;

class ItemsTableSeeder extends Seeder
{
    public function run()
    {
        for ($i = 1; $i <= 500; $i++) {
            Item::create(['name' => 'Item ' . $i]);
        }
    }
}
