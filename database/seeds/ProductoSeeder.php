<?php

use Illuminate\Database\Seeder;
use App\Productos;

class ProductoSeeder extends Seeder
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
                'name' => 'Producto '.$i,
                'description' => 'Producto '.$i,
                'cantidad'  => 1,
                'estado'    => 1,
                'id_vendedor'   => rand(1,10)
            ];
        }
        foreach ($productoData as $producto) {
            Productos::create($producto);
        }
    }
}
