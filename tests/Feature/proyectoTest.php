<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class proyectoTest extends TestCase
{
    use RefreshDatabase;
    //public function test_register(): void
    //{
    //    Artisan::call();
    //    $response = $this->get('/register');
    //    $response->assertStatus(200)->assertSee("register");
    //}

    public function test_new_posts(): void
    {
        $user = User::factory()->create();
        $this->actingAs($user);
        $this->withoutExceptionHandling();

        $file = UploadedFile::fake()->image('No-Image-Placeholder.png');

        $response = $this->post('/posts',[
            "user_id" => $user->id,
            "content" => "Descripción",
            "category" => "Busqueda",
            "image" => $file,
        ]);

        $response->assertRedirect('tus-posts');

        $this->assertCount(1, Post::all());

        $post = Post::first();

        $this->assertEquals($post->user_id, $user->id);
        $this->assertEquals($post->content, "Descripción");
        $this->assertEquals($post->category, "Busqueda");
        $this->assertStringStartsWith('images/featureds/', $post->image);
    }
}
