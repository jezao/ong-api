<?php

namespace App\Domain\Person\Factory;

use App\Domain\Address\Models\AddressModel;
use App\Domain\Person\Models\PersonModel;
use Illuminate\Database\Eloquent\Factories\Factory;

class PersonFactory extends Factory
{
    protected $model = PersonModel::class;

    public function definition(): array
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'email' => $this->faker->unique()->safeEmail(),
            'document' => $this->faker->randomNumber(8),
            'dob' => $this->faker->dateTimeInInterval('-15 years'),
            'clothes_size' => $this->faker->randomElement([8,10,12,14,16,'P','M','G','GG']),
            'shoes_size' => $this->faker->numberBetween(10,48),
            'phone1' => $this->faker->phoneNumber,
            'is_responsible' => $this->faker->boolean(10),
            'address_id' => AddressModel::factory()

        ];
    }
}
