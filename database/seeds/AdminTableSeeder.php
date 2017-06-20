<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        dump(11);
        DB::table('admin')->insert([
            'username' => 'admin',
            'email' => '',
            'password' => encrypt('123123'),
        ]);
    }
}
