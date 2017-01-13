<?php

use Illuminate\Database\Seeder;

class UserSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'name' => 'Admin', 'email' => 'admin@admin.com', 'password' => '$2y$10$jNGVXIU6wdhUGHRwlsqaLuR7.Vm3VPDZQ6UL12vI2CBV5J/NQs.6a', 'role_id' => 1, 'remember_token' => '',],
            ['id' => 2, 'name' => 'Usuario comum', 'email' => 'comum@comum.com', 'password' => '$2y$10$YyuvnI8BmjgsLXHiR.yD7.JjNs3byFED9a9HQCxEakMqPO8nlqoai', 'role_id' => 2, 'remember_token' => null,],

        ];

        foreach ($items as $item) {
            \App\User::create($item);
        }
    }
}
