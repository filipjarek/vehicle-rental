<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         User::factory(9)->create();

         User::factory()->create([
            
             'name' => 'jkowal',
             'email' => 'admin@gmail.com',
             'role' => 'admin',
             
         ]);
    }
}
