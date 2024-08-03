<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use App\Models\WorkCategory;

class WorkCategoryFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = WorkCategory::class;

    /**
     * Define the model's default state.
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(4),
            'excerpt' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'description' => $this->faker->text(),
            'seo_title' => $this->faker->regexify('[A-Za-z0-9]{128}'),
            'meta_description' => $this->faker->regexify('[A-Za-z0-9]{255}'),
            'slug' => $this->faker->slug(),
            'is_active' => $this->faker->boolean(),
        ];
    }
}
