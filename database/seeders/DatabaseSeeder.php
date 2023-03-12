<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\User::factory(7)->create();
        \App\Models\Student::factory(50)->create();

    // '   ' \App\Models\User::factory()->create([
    //         'name' => 'Test User',
    //         'email' => 'test@example.com',
    //      ]);

    $user = User::create([
        'name' =>  'Bernardo',
        'email' => 'beortizz@gmail.com',
        'password' => Hash::make('bernardo1234'),
        'birth_date' => Carbon::create(2003, 1, 28),    
        'address' => 'rua tres',
        'permission' => false,
        'phone_number' => '24999999999',
        'enter_hour' => Carbon::now()->hour(8)->minute(30), 
        'leave_hour' => Carbon::now()->hour(16)->minute(30),   
    ]);
    $user->email_verified_at = now();
    $user->save();
    }
}