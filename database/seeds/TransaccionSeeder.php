<?php

use Illuminate\Database\Seeder;
use App\Transacciones;

class TransaccionSeeder extends Seeder
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
            
            $transaccionesData[] = [
                'cantidad' => 1,
                'id_comprador' =>  rand(1,10),
                'id_producto'  =>  rand(1,10),
                
            ];
        }
        foreach ($transaccionesData as $transaccion) {
            Transacciones::create($transaccion);
        }
    }
}
