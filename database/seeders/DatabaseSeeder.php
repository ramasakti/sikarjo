<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        DB::table('users')
            ->insert([
                'username' => 'adminsikarjo',
                'password' => bcrypt('adminsikarjo'),
                'name' => 'Siti Aminatus S',
                'status' => 'Admin',
                'whatsapp' => '628'
            ]);

        DB::table('users')
            ->insert([
                'username' => 'pembeli',
                'password' => bcrypt('pembeli'),
                'name' => 'Nama Pembeli',
                'status' => 'User',
                'whatsapp' => '628'
            ]);
    }
}
