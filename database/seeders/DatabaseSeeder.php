<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        DB::table('users')->insert([
            'username' => 'admin',
            'password' => Hash::make('admin'),
            'role' => 'admin',
        ]);

        DB::table('users')->insert([
            'username' => 'user',
            'password' => Hash::make('user'),
            'role' => 'user',
        ]);

        DB::table('kategoris')->insert([
            ['nama' => 'Fiksi'],
            ['nama' => 'Non-fiksi'],
            ['nama' => 'Edukasi'],
            ['nama' => 'Biografi'],
            ['nama' => 'Sains'],
        ]);
    }
}
