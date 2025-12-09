<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create admin user if it doesn't exist
        $admin = User::firstOrCreate(
            ['email' => 'admin@hamroyaad.com'],
            [
                'name' => 'Admin User',
                'password' => Hash::make('admin123'),
                'is_admin' => true,
            ]
        );

        // If admin exists but is not admin, update it
        if ($admin && !$admin->is_admin) {
            $admin->is_admin = true;
            $admin->save();
        }

        $this->command->info('Admin user created/updated successfully!');
        $this->command->info('Email: admin@hamroyaad.com');
        $this->command->info('Password: admin123');
    }
}
