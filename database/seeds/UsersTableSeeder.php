<?php

use App\User as User;
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
        User::truncate();

        User::create([
            'name' => 'Henrik',
            'email' => 'henrik@innoract.com',
            'password' => Hash::make('snorbuse')
        ]);

        User::create([
            'name' => 'Fartbruse',
            'email' => 'fart@bruse.com',
            'password' => Hash::make('snorbuse')
        ]);
    }
}
