<?php

use Illuminate\Database\Seeder;
use App\InventoryItem;
class InventoryItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // Initialize Faker module.
        $faker = \Faker\Factory::create();

        // Remove all existing records.
        InventoryItem::truncate();

        // Seed data.
        for ($i = 0; $i < 50; $i++) {
            InventoryItem::create([
                'itemName' => $faker->name,
                'itemDescription' => $faker->paragraph,
                'itemQuantity' => $faker->biasedNumberBetween($min = 0, $max = 200, $function = 'sqrt'),
                'itemIsAvailable' => $faker->boolean,
            ]);
        }
    }
}
