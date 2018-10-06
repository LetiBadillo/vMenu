<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            ['name' => 'Admin', 
            'last_name' => 'admin',
            'username' => 'admin', 
            'password' => Hash::make('123456'), 
            'email' => 'admin@admin.com', 
            'enabled' => 1, 
            'user_type' => 1, 
            'room' => null, 
            ],
            ['name' => 'FrontDesk', 
            'last_name' => 'desk',
            'username' => 'front', 
            'password' => Hash::make('123456'), 
            'email' => 'front@front.com', 
            'enabled' => 1, 
            'user_type' => 2, 
            'room' => null, 
            ],
            ['name' => 'Cocina', 
            'last_name' => 'Restaurante',
            'username' => 'cocina', 
            'password' => Hash::make('123456'), 
            'email' => 'cocina@cocina.com', 
            'enabled' => 1, 
            'user_type' => 3, 
            'room' => null, 
            ],
            ['name' => 'Leti', 
            'last_name' => 'Badillo',
            'username' => '144badillo', 
            'password' => Hash::make('123456'), 
            'email' => null, 
            'enabled' => 1, 
            'user_type' => 4, 
            'room' => 144, 
            ]
        ];

        DB::table('users')->insert($users);
    }
}
