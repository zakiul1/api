<?php

namespace Database\Factories;

use App\Models\Employee;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{

    protected $model = Employee::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {

        $gender = $this->faker->randomElement(['male', 'female']);
        return [
            'name' => $this->faker->name($gender),
            'email' => $this->faker->unique()->email,
            'address' => $this->faker->address,
            'designation' => $this->faker->name,
            'phone_number' => $this->faker->phoneNumber,
            'image' => $this->faker->imageUrl(),
            'salary' => $this->faker->unique(true)->numberBetween(18000, 60000),
            'join_date' => $this->faker->date(),
           
           
        ];
    }
}
