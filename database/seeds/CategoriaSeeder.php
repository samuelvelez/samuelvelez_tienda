<?php

use Illuminate\Database\Seeder;
use App\Categorias;
class CategoriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 5; $i++) {
            
            $categoriaData[] = [
                'name' => 'Categoria '.$i,
                'description' => 'Categoria '.$i,
            ];
        }
        foreach ($categoriaData as $categoria) {
            Categorias::create($categoria);
        }
    }
}
