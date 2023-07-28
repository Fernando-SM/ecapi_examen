<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $users = User::factory()->count(100)->create();

        foreach ($users as $user) {
            $user->userDomicilio()->create([
                'domicilio' => 'Dirección de ejemplo',
                'numero_exterior' => 'Número exterior de ejemplo',
                'colonia' => 'Colonia de ejemplo',
                'cp' => 'Código Postal de ejemplo',
                'ciudad' => 'Ciudad de ejemplo',
            ]);
        }
    }
}
