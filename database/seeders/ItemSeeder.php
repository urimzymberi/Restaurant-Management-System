<?php

namespace Database\Seeders;

use App\Models\Item;
use Illuminate\Database\Seeder;

class ItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i = 1; $i <= 16; $i++) {
            $item = new Item();

            $item->name = 'test' . $i;
            $item->image = 'img-' . $i . '.jpg';
            $item->price = $i * 2;
            $item->stock = 10;
            $category = 1;
            switch ($i) {
                case $i <= 4:
                    $category = 1;
                    break;
                case $i <= 8:
                    $category = 2;
                    break;

                case $i <= 12:
                    $category = 3;
                    break;

                default:
                    $category = 4;
            }
            $item->category_id = $category;

            $item->save();
        }
    }
}
