<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        $user = new User;
        $user->name = "Pieter";
        $user->email = "pietervanlooy@icloud.com";
        $user->password = bcrypt('1Hum!merà3');
        $user->save();
    }
}
