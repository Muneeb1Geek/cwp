<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = [
            [
                'username'=>'Muhammad Muneeb Ur Rehman',
                'email'=>'muneeb@gmail.com',
                'password'=>Hash::make('123123')
            ],[
                'username'=>'Ali',
                'email'=>'ali@gmail.com',
                'password'=>Hash::make('123123')
            ]
            ];

            foreach ($users as $key => $user) {
                if($key==0){
                    $user = User::create($user)->assignRole('admin');
                }
                else{
                    $user = User::create($user)->assignRole('user');
                }
            }
    }
}
