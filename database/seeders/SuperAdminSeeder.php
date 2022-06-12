<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $su = User::create([
            'name' => 'Super Admin',
            'email' => 'admin@test.com',
            'password' => \Hash::make('test123'),
            'phone_number' => '123123123',
            'phone_verified_at' => now(),
        ]);
        $token = $su->createToken('full_access');
        print('Super Admin Token => ' . $token->plainTextToken.'\n');
    }
}
