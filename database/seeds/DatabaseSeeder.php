<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


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

        factory(App\User::class, 5)->create();

        // DB::table('users')->insert([
        //     'name' => 'James',
        //     'email' => 'James9123'.'@gmail.com',
        //     'password' => 'James101!!',
        // ]);
    }
}
