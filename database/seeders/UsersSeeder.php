<?php

namespace Database\Seeders;

use App\Models\Roles;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Pastikan tabel roles memiliki data
        $defaultRole = Roles::first();
        if (!$defaultRole) {
            $this->command->error('No roles found. Please seed the roles table first.');
            return;
        }

        // Insert pengguna secara manual
        User::create([
            'id' => Str::uuid(),
            'name' => 'nadia',
            'email' => 'nadia@gmail.com',
            'password' => bcrypt('password'),
            'email_verified_at' => now(),
            'role_id' => $defaultRole->id,
            'created_at' => now(),
            'updated_at' => now(),
        ]);

        User::factory()->count(5)->create();
    }
}
