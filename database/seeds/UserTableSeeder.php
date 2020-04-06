<?php

use Illuminate\Database\Seeder;
use App\User;
class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = new User;
        $user->name = 'Symaci';
        $user->email = 'nhat150619@gmail.com';
        $user->password = bcrypt('anhnhat1992');
        $user->save();
    }
}
