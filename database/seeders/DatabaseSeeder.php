<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;
use App\Models\User;
use App\Models\Patient;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // seeder user untuk login
      User::factory()->create([
            'name' => 'Laravel',
            'username' => 'laravel',
            'password' => bcrypt('12345')
        ]);

        // data rumah sakit
      Hospital::factory()->create([
        'name' => 'Rumah Sakit A',
        'address' => 'Alamat Rumah Sakit A',
        'email' => 'rsa@example.com',
        'phone' => '1234567890',
        ]);
      Hospital::factory()->create([
        'name' => 'Rumah Sakit B',
        'address' => 'Alamat Rumah Sakit B',
        'email' => 'rsb@example.com',
        'phone' => '9876543210',
        ]);
      Hospital::factory()->create([
        'name' => 'Rumah Sakit C',
        'address' => 'Alamat Rumah Sakit C',
        'email' => 'rsc@example.com',
        'phone' => '9876333210',
        ]);

        Patient::factory(6)->create();
    }
}
