<?php

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
        factory(App\Order::class, 20)->create()->each(function($order) {
            $order->resumes()->createMany(factory(App\Resume::class,rand(1,5))->make()->toArray());
        });
    }
}
