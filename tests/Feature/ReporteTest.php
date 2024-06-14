<?php

namespace Tests\Feature;

use App\Models\Post;
use App\Models\Report;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;
use Illuminate\Http\UploadedFile;

class ReporteTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function ReportTest(): void
    {
        $user = User::factory()->create();

        $post = Post::factory()->create(['user_id' => $user->id]);

        $reportingUser = User::factory()->create();
        $this->actingAs($reportingUser);
        $this->withoutExceptionHandling();
        
        $response = $this->post("/reports/{$post->id}",[
            "user_id" => $reportingUser->id,
            "post_id" => $post->id,
            "reason" => "Descripción",
        ]);

        // Verifica que se haya creado correctamente
        $response->assertRedirect(url()->previous());

        $this->assertCount(1, Report::all());

        $report = Report::first();

        // Verifica que el reporte esté en la base de datos
        $this->assertEquals($report->user_id, $reportingUser->id);
        $this->assertEquals($report->post_id, $post->id);
        $this->assertEquals($report->reason, "Descripción");
    }
}
