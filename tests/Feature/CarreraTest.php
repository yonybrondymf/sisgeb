<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Carrera;

class CarreraTest extends TestCase
{
	use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @test
     */
    public function verify_create_carrera()
    {
    	$this->withoutExceptionHandling();
    	$carrera = factory(Carrera::class)->make();

    	$this->post("/carreras",[
    		'carrera' => $carrera->carrera
    	])->assertRedirect('carreras');

        $this->assertDatabaseHas('carreras',[
        	'carrera' => $carrera->carrera,
        	'estado' => 1
        ]);
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function verify_update_carrera()
    {
        $this->withoutExceptionHandling();
        $carrera = factory(Carrera::class)->create([
            'estado' => 1 
        ]);
        $carrera2 = factory(Carrera::class)->make();
        $this->put("/carreras/{$carrera->id}",[
            'carrera' => $carrera2->carrera
        ])->assertRedirect('carreras');

        $this->assertDatabaseHas('carreras',[
            'carrera' => $carrera2->carrera,
            'estado' => 1
        ]);
    }

    /**
     * A basic test example.
     *
     * @test
     */
    public function delete_carrera()
    {
        $this->withoutExceptionHandling();
        $carrera = factory(Carrera::class)->create([
            'estado' => 1 
        ]);
        $this->delete("/carreras/{$carrera->id}")->assertRedirect('carreras');

        $this->assertDatabaseMissing('carreras',[
            'id' => $carrera->id,
        ]);
    }
}
