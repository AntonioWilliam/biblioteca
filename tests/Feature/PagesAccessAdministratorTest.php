<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesAccessAdministratorTest extends TestCase
{
  /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_cadastrarlivros_successful_response()
    {
        $response = $this->get('/cadastrarlivros');

        $response->assertStatus(200);
    }
}
