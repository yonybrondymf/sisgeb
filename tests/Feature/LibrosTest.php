<?php

namespace Tests\Feature;

use Tests\TestCase;
use App\Libro;
use Carbon\Carbon;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class LibrosTest extends TestCase
{
    use DatabaseTransactions;
    /**
     * A basic test example.
     *
     * @test
     */
    public function verify_create_libros()
    {
    	$this->withoutExceptionHandling();
    	$libro = factory(Libro::class)->make();

    	$this->post("/libros",[
    		'codigo' => $libro->codigo,
    		'titulo' => $libro->titulo,
    		'ejemplares' => $libro->ejemplares,
    	])->assertRedirect('libros');

        $this->assertDatabaseHas('libros',[
        	'titulo' => $libro->titulo,
        	'ejemplares' => $libro->ejemplares,
        	'codigo' => $libro->codigo,
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
        $date = Carbon::now();
        $libro = factory(Libro::class)->create([
        	'fecregistro' => $date->format("Y-m-d")
        ]);
        $libro2 = factory(Libro::class)->make();
        $this->put("/libros/{$libro->id}",[
            'ejemplares' => $libro2->ejemplares,
            'titulo' => $libro2->titulo,
            'codigo' => $libro2->codigo,
        ])->assertRedirect('libros');

        $this->assertDatabaseHas('libros',[
            'ejemplares' => $libro2->ejemplares,
            'titulo' => $libro2->titulo,
            'codigo' => $libro2->codigo,
            'fecregistro' => $date->format("Y-m-d")
        ]);
    }
}
