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
                'name' => "Huawei Mate 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Huawei Mate 10",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Huawei Mante Note 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'price' => 378.00,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Huawei Mante Note 01",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'price' => 21.10,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Samsung Galaxy S9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Samsung Galaxy S9+",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Samsung Galaxy Note 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Samsung Galaxy Note 8",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Motorola Moto Z3",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Motorola Moto Z2",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => null,
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Motorola Moto Z",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "iPhone X",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "iPhone Xr",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "iPhone Xs",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'images' => '',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],

        ];

        DB::table('products')->insert($products);
    }
}
