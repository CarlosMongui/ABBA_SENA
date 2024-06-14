<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'content' => "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nec magna eu nisi vestibulum consequat. Proin pulvinar lacinia orci, id interdum nunc sagittis vel. Mauris imperdiet nec augue sit amet rhoncus. Donec non sem id dolor pharetra luctus. Etiam a quam eget dolor hendrerit sodales eu quis ante. Integer non convallis ipsum.",
            'image' => "images/featureds/image.png",
            'category' => "Busqueda",
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return $this
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
