<?php

use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        $this->call('UsersTableSeeder');
    }
}

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'name'=>'Saulo Henrique',
            'email'=>'sktsaulo@hotmail.com',
            'password'=>bcrypt('admin'),
        ]);
    }

}
