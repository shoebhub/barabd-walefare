<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Admin;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Facades\Hash; // Import the Hash facade

class AdminsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $adminRecords = [
            [
                'id' => 1,
                'name' => 'Barabd Walefare',
                'email' => 'barabd@walefare.com',
                'phone' => 987456321,
                'password' => Hash::make('12345678')
            ]
        ];
        User::insert($adminRecords);
    }
}
