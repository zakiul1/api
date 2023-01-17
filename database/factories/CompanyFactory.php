<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Company>
 */
class CompanyFactory extends Factory
{


    protected $model = Company::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

    public function definition()
    {
        return [
            'name' => $this->faker->company,
            'address' => $this->faker->address,
            'contact' => $this->faker->phoneNumber,
            'email' => $this->faker->unique()->email,
            'country' => $this->faker->country(),
            'type' => $this->faker->boolean,
        ];
    }
}
