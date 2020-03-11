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
    
            DB::table('teachers')->insert([
                'name' => Str::random(10),
                'password' => Hash::make('password'),
                'phone' => Str::random(10),
                'role' => Str::random(10),

            ]);
    }
}
