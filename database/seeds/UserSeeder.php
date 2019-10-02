<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=0; $i < 10; $i++) {
            $attributes = [
                'name' => 'User'.$i,
                'email' => 'User'.$i.'@gmail.com',
                'email_verified_at' => date('Y-m-d H:i:s'),
                'password' => hash('sha256', '123456')
            ];
            User::create($attributes);
        }
    }
}
