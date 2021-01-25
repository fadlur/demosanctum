<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'email' => 'fadloer@gmail.com',
            'name' => 'Fadlur',
            'password' => \Hash::make('123258'),
            'status' => 'aktif',
        ]);
    }
}
