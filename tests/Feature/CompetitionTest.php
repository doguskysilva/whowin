<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CompetitionTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_show_all_competitions()
    {
        $this->actingAs($user = User::factory()->create());
        $response = $this->get('/competitions');
        $response->assertStatus(200);
    }
}
