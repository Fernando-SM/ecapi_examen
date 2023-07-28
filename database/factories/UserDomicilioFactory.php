<?php

namespace Database\Factories;

use App\Models\UserDomicilio;
use Illuminate\Database\Eloquent\Factories\Factory;

class UserDomicilioFactory extends Factory
{
    protected $model = UserDomicilio::class;

    public function definition()
    {
        return [
            'domicilio' => $this->faker->address,
            'numero_exterior' => $this->faker->buildingNumber,
            'colonia' => $this->faker->secondaryAddress,
            'cp' => $this->faker->postcode,
            'ciudad' => $this->faker->city,
        ];
    }
}
