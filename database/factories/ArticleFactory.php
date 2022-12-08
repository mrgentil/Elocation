<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(["name" => "string", "no_serie" => "string", "image_url" => "string", "type_article_id" => "int", "state" => "int"])] public function definition(): array
    {
        return [
            "name" => $this->faker->lastName,
            "no_serie" => $this->faker->swiftBicNumber,
            "image_url" => "images/imageplaceholder.png",
            "type_article_id" => rand(1,4),
            "state" => rand(0, 1)
        ];
    }
}
