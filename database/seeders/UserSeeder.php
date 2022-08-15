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
        User::factory()->count(10)->create();

        User::create([
            'name' => 'Victor',
            'cpf' => '11693743957',
            'password' => bcrypt('123456'),
            'unity_id' => 1,
            'responsability' => 'atendente',
        ]);
    }
}