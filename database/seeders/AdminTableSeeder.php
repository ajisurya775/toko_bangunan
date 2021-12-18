<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'ud_rizki123@gmail.com',
            'email_verified_at' => date('Y-m-d H:i:s', time()),
            'password' => \bcrypt('seitontong'),
            'is_admin' => true
        ]);
    }
}
