<?php

namespace Database\Factories;

use App\Models\Client;
use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Client::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => '1',
            'client_name' => $this->faker->name(),
            'date_of_birth' => $this->faker->date('Y_m_d'),
            'address' => $this->faker->address(),
            'post_code' => $this->faker->postcode(),
            'email' => $this->faker->unique()->safeEmail(),
            'contact_number' => '0123456789',
            'risk_status' => $this->faker->randomElement(['None', 'Low', 'Meidum', 'High', 'Crisis']),
            'service' => $this->faker->randomElement(['CBT', 'Counselling', 'EMDR', 'Consultation', 'Supervision', 'Tutoring', 'Crisis']),
        ];
    }
}
