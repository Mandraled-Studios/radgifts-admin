<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hamper;
use App\Models\VariantAttribute;

class VariantAttributeFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VariantAttribute::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'attribute_name' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'switch_type' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'hamper_id' => Hamper::factory(),
        ];
    }
}
