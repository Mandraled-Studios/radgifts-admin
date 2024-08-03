<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\VariantAttribute;
use App\Models\VariantValue;

class VariantValueFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = VariantValue::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'value_name' => $this->faker->regexify('[A-Za-z0-9]{128}'),
            'switch_value' => $this->faker->regexify('[A-Za-z0-9]{64}'),
            'variant_attribute_id' => VariantAttribute::factory(),
        ];
    }
}
