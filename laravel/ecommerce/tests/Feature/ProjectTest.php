<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     */
    public function test_a_user_can_check_project_list(): void
    {
        $response = $this->get('/api/v1/projects');

        $response->assertStatus(200);
    }

    public function test_a_user_can_create_a_project(): void
    {
        $response = $this->post('/api/v1/projects', [
            'title' => 'project 1',
            'description' => 'this is a sample description',
        ]);

        $this->assertDatabaseHas('projects', [
            'title' => 'project 1'
        ]);

        $response->assertStatus(201);
    }

    public function test_a_user_will_get_validation_error_if_title_not_provided(): void
    {
        $response = $this->postJson('/api/v1/projects', [
            // 'title' => 'test',
            'description' => 'this is a sample description',
        ]);

        // $response->assertStatus(422);
        $response->assertUnprocessable();
        $response->assertJsonValidationErrors('title');
    }
}
