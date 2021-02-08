<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use App\Models\Grupo;

class GruposUsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_UserGrupos()
    {
        //Sin autenticar, devuelve una redireccion (302) al login.
        $response = $this->get('/api/grupos');
        $response->assertStatus(302);

        //Autenticado, devuelve un 200.
        //$user = User::find(1);
        Sanctum::actingAs(
            User::factory()
            ->hasAttached(
                Grupo::factory()->count(3)
            )
            ->create()
        );
        $response = $this->get('/api/grupos');
        $response->assertStatus(200)
            ->assertJsonStructure(['data' => [['curso', 'letra', 'nivel']]])
            ->assertJsonCount(3, 'data');
    }
}
