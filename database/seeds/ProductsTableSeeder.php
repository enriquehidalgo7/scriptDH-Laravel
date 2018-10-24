<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => "Samsung",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Motorola",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Apple",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'price' => 378.00,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => 'Huawei',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'price' => 21.10,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
        ];

        DB::table('products')->insert($products);
    }
}
