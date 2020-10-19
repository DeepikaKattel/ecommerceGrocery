<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Deepika Kattel',
            'email' => 'admin@easynepal.com',
            'user_role' => '1',
            'password' => bcrypt('1234'),
            'email_verified_at' => now(),
            'remember_token' => Str::random(10),

        ]);
    }
}
