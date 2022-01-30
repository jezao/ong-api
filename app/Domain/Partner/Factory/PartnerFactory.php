<?php

namespace App\Domain\Partner\Factory;

use App\Domain\Address\Models\AddressModel;
use App\Domain\Partner\Models\PartnerModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PartnerFactory extends Factory
{
    protected $model = PartnerModel::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'is_business' => $this->faker->boolean(50),
            'document' => $this->faker->randomNumber(8),
            'address_id' => AddressModel::factory(),
        ];
    }
}