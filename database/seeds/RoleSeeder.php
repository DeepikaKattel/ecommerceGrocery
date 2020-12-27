<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('user_roles')->insert(array(
            array(
                'role' => 'admin',
            ),
//            array(
//
//                'role' => 'vendor_account',
//            ),
            array(

                'role' => 'customer',
            )

        ));
    }
}
