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
		DB::table('users')->insert([
			'name' => "Administrateur",
			'email' => "admin@admin.fr",
			'password' => bcrypt('admin00'),
		]);
    }
}
