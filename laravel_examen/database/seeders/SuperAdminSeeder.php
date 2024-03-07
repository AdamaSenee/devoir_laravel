<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SuperAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Creating Super Admin User
        $superAdmin = User::create([
            'name' => 'adama', 
            'email' => 'adama@gmail.com',
            'password' => Hash::make('passer1234')
        ]);
        $superAdmin->assignRole('Super Admin');

        // Creating Admin User
        $admin = User::create([
            'name' => 'awa', 
            'email' => 'awa@gmail.com',
            'password' => Hash::make('passer1234')
        ]);
        $admin->assignRole('Admin');

        // Creating Product Manager User
        $productManager = User::create([
            'name' => 'fatou', 
            'email' => 'fatou@gmail.com',
            'password' => Hash::make('passer1234')
        ]);
        $productManager->assignRole('Product Manager');
    }
}