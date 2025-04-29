<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $admin = user::create([
            'name' => 'admin',
            'email' => 'admin@web.test',
            'password' => bcrypt('password'),
        ]);
        $admin->assignRole('admin');
    }
}
