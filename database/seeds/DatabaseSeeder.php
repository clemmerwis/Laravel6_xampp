<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        DB::table('users')->insert([
            'name' => 'Chris',
            'email' => 'chris8119123'.'@gmail.com',
            'password' => 'Chris101!!',
        ]);
    }
}
