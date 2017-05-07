<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new \App\User();
        $user->name = 'areknet8';
        $user->email = 'areknet8@wp.pl';
        $user->password = bcrypt('oli');
        $user->save();
    }
}
