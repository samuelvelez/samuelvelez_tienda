<?php

use Illuminate\Database\Seeder;
use App\Categoria_producto;

class CategoriaProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        for ($i=0; $i < 10; $i++) {
            
            $productoData[] = [
                'id_categoria' => rand(1,5),
                
                'id_producto'   => rand(1,10)
            ];
        }
        foreach ($productoData as $producto) {
            Categoria_producto::create($producto);
        }
    }
}
