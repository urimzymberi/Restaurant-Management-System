<?php

namespace Database\Seeders;

use App\Models\Order;
use Illuminate\Database\Seeder;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $list = [
            ['waiter_id' => '2', 'chef_id' => '0'],
            ['waiter_id' => '2', 'chef_id' => '3']
        ];

        foreach ($list as $o) {
            $order = new Order();
            $order->waiter_id = $o['waiter_id'];
            $order->chef_id = $o['chef_id'];
            $order->save();
        }
    }
}
