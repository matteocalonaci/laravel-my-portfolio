<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        if (!User::where("email", "matteo.calonaci.1994@gmail.com")->first()) {
            $mainUser = new User();
            $mainUser->name = "Matteo";
            $mainUser->email = "matteo.calonaci.1994@gmail.com";
            $mainUser->email_verified_at = now();
            $mainUser->password = Hash::make('Juventus4ever.08');
            $mainUser->save();
        }
    }
}
