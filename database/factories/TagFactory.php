<?php

namespace Database\Factories;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use function Pest\Laravel\post;

class TagFactory extends Factory
{
    protected $model = Tag::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id'=>Str::uuid()->toString(),
        'title'=>$this->faker->sentence,
            ];
    }
}
