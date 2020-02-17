<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserModuleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_it_show_the_user_list()
    {
        $this->get('/usuarios')
        ->assertStatus(200)
        ->assertSee('');
    }
    
    // public function test_it_
    public function test_it_loads_the_user_details_page()
    {
        $this->get('/usuarios/5')
        ->assertStatus(200)
        ->assertSee('Mostrando detalle del usuario 5');
    }

    public function test_it_loads_the_new_user_page()
    {
        $this->get('/usuarios/nuevo')
        ->assertStatus(200)
        ->assertSee('Crear un nuevo Usuario');
    }
}

//Cread una ruta, con su prueba correspondiente
// /usuarios/{ID del usuario aquí}/edit


//desafío adicional:

/*
La ID Solo puede ser un entero y deberías escribir una prueba
comprobar que la URL /usuarios/texto/edit no es valida
*/



