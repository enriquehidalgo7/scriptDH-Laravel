<?php

use Illuminate\Database\Seeder;

class AccesoriesTableSeeder extends Seeder
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
                'name' => "Funda Huawei Mate 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Huawei Mate 10",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Huawei Mante Note 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 37,
                'price' => 378.00,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Huawei Mante Note 01",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 10,
                'price' => 21.10,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Samsung Galaxy S9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Samsung Galaxy S9+",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Samsung Galaxy Note 9",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Samsung Galaxy Note 8",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Motorola Moto Z3",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Motorola Moto Z2",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda Motorola Moto Z",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda iPhone X",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda iPhone Xr",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            [
                'name' => "Funda iPhone Xs",
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua consequat.',
                'units' => 20,
                'price' => 9999.99,
                'image' => '*',
                'created_at' => new DateTime,
                'updated_at' => null,
            ],
            
        ];

        DB::table('accesories')->insert($accesories);
    }
}