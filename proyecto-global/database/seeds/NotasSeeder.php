<?php

/*namespace Database\Seeders;*/
use App\Models\Notas;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class NotasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Notas::Create([
            'codigo' => '¿Para qué sirve Composer?',
            'descripcion' => 'Con Composer podemos instalar y actualizar frameworks como Laravel o Symfony, 
                        así como componentes para generar PDF, procesar pagos con tarjetas, manipular imágenes y mucho más.',
            'cantidad' => '45',
            'precio' => '15',
        ]);

        Notas::Create([
            'codigo' => '¿bdfbdsfbzdboser?',
            'descripcion' => 'dvsdvsdvzsfbvzdfb',
            'cantidad' => '35',
            'precio' => '5',
        ]);

    }
}
