<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Title;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Title>
 */
class TitleFactory extends Factory
{
    
    protected $model = Title::class;

    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence,
        ];
    }
}
