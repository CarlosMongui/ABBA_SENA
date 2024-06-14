<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class RegistroTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function RegistroTest()
    {
        $response = $this->post("/register", [
            "name" => "Nombre de usuario",
            "email" => "correo@example.com",
            "password" => "contraseña",
            "password_confirmation" => "contraseña",
            "phone" => "1234567890",
            "birth_date" => "2001/01/01",
        ]);

        $response->assertRedirect("/home");
        $this->assertDatabaseHas("users", ["email" => "correo@example.com"]);
    }
}
