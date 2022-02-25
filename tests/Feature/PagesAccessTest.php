<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PagesAccessTest extends TestCase
{
  /**
     * A basic test example.
     *
     * @return void
     */
    public function test_the_application_returns_a_successful_response()
    {
        $response = $this->get('/consultaracervo');

        $response->assertStatus(200);
    }

    public function test_route_cadastrarlivro_returns_a_successful_response()
    {
        $response = $this->get('/cadastrar');

        $response->assertStatus(200);
    }

    public function test_route_cadastrarleitor_returns_a_successful_response()
    {
        $response = $this->get('/cadastrarleitor');

        $response->assertStatus(200);
    }

    public function test_route_realizaremprestimo_returns_a_successful_response()
    {
        $response = $this->get('/realizaremprestimo');

        $response->assertStatus(200);
    }

    public function test_route_registrarinteresseemlivro_returns_a_successful_response()
    {
        $response = $this->get('/registrarinteresseemlivro');

        $response->assertStatus(200);
    }


    public function test_route_consultarlivrosemprestados_returns_a_successful_response()
    {
        $response = $this->get('/consultarlivrosemprestados');

        $response->assertStatus(200);
    }

    public function test_route_consultarleitorescadastrados_returns_a_successful_response()
    {
        $response = $this->get('/consultarleitorescadastrados');

        $response->assertStatus(200);
    }

}
