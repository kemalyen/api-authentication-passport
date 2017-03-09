<?php
use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{


    public function run()
    {
        DB::table('users')->delete();

        $users = array(
            array(
                'email' => 'admin@example.org',
                'password' => Hash::make('admin'),
                'name' => 'John Doe',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),

            array(
                'email' => 'jane@example.org',
                'password' => Hash::make('user'),
                'name' => 'jane Doe',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),

            array(
                'email' => 'user@example.org',
                'password' => Hash::make('user'),
                'name' => 'Sample User',
                'created_at' => new DateTime,
                'updated_at' => new DateTime,
            ),
        );
        DB::table('users')->insert($users);


    }

}