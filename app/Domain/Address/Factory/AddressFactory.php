<?php

namespace App\Domain\Address\Factory;

use App\Domain\Address\Models\AddressModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class AddressFactory extends Factory
{
    protected $model = AddressModel::class;
    public function definition(): array
    {
        return [
            'postal_code' => rand(10000, 99999).'-'.rand(100, 999),
            'address1' => $this->faker->streetAddress,
            'address2' => $this->faker->streetAddress,
            'neighborhood' => $this->faker->word(),
            'city' => $this->faker->city,
            'state' => $this->faker->citySuffix,
        ];
    }
}