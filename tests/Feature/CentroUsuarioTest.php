<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\User;
use Laravel\Sanctum\Sanctum;
use App\Models\Grupo;

class CentroUsuarioTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {

        //Sin autenticar, devuelve una redireccion (302) al login.
        $response = $this->get('/api/centros');
        $response->assertStatus(302);


        $user = User::find(1);
        
        $response->assertStatus(200);
    }
}
