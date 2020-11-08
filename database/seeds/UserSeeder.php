<?php

use App\ArticleOrder;
use App\Order;
use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(User::class)->create([
            'name' => 'John Doe',
            'first_name' => 'John',
            'last_name' => 'Doe',
            'email' => 'john@test.com',
            'head' => 1,
            'password' => Hash::make('12345678'),
        ]);
        
        factory(User::class, 5)->create()
            ->each(function($user){
                return factory(Order::class, 2)->create(['user_id' => $user->id])
                    ->each(function($order) {
                        return factory(ArticleOrder::class)
                            ->create(['order_id' => $order->id]);
                    });
            });
    }
}
