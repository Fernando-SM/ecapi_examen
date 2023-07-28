<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Método para obtener todos los usuarios con domicilios y edades
    public function getUsersWithDomiciliosAndAge()
    {
        // Obtener todos los usuarios con sus domicilios utilizando eager loading
        $users = User::with('userDomicilio')->get();

        // Mapear los usuarios para calcular la edad y retornar los datos en un array
        $usersWithAge = $users->map(function ($user) {
            // Calcular la edad del usuario en base a la fecha de nacimiento utilizando Carbon
            $age = Carbon::parse($user->fecha_nacimiento)->age;

            // Retornar un array con los datos del usuario, su edad y domicilio
            return [
                'id' => $user->id,
                'name' => $user->name,
                'email' => $user->email,
                'fecha_nacimiento' => $user->fecha_nacimiento,
                'edad' => $age,
                'domicilio' => $user->userDomicilio,
            ];
        });

        // Retornar los datos en formato JSON con código de estado HTTP 200 (OK)
        return response()->json($usersWithAge, 200);
    }
}
