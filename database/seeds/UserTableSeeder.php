<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
        	'name' => 'admin',
        	'email' => 'nguyenthaison3999@gmail.com',
        	'password' => Hash::make('12345'),
        ];
        foreach ($users as $value) {
        	DB::table('admin')->insert($value);
        }
    }
}
