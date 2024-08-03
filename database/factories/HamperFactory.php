<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\Hamper;

class HamperFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Hamper::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'excerpt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'hamper_description' => $this->faker->text(),
            'thumbnail' => $this->faker->word(),
            'usual_price' => $this->faker->randomFloat(2, 0, 999999.99),
            'offer_price' => $this->faker->randomFloat(2, 0, 999999.99),
            'corporate_hamper_flag' => $this->faker->boolean(),
            'seo_title' => $this->faker->regexify('[A-Za-z0-9]{128}'),
            'meta_description' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'slug' => $this->faker->slug(),
            'is_active' => $this->faker->boolean(),
            'has_variants' => $this->faker->boolean(),
        ];
    }
}
