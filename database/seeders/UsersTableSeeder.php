<?php

namespace Database\Seeders;

use App\Models\User;
use Faker\Core\Number;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(){
        $user = User::create([
            'name' => '管理員',
            'username' => 'admin',
            'password' => Hash::make('admin'),
        ]);
        }
}