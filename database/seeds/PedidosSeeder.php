<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class PedidosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pedidos')->insert(
            [
                [
                    'Fecha_pedido' => '2020-06-07',
                    'Fecha_entrega' => '2020-06-15',
                    'Nombre_recibe' => 'EVA MARIA',
                    'costoT' => 2600.00,
                    'EstatusEnvio' => 'Enviado',
                    'Pago' => true,
                    'producto_id' => 1,
                    'cliente_id'=> 2,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Fecha_pedido' => '2020-05-20',
                    'Fecha_entrega' => '2020-05-25',
                    'Nombre_recibe' => 'TOMAS ALVARO',
                    'costoT' => 3250.00,
                    'EstatusEnvio' => 'Lleganda',
                    'Pago' => true,
                    'producto_id' => 5,
                    'cliente_id'=> 3,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Fecha_pedido' => '2020-06-09',
                    'Fecha_entrega' => '2020-06-13',
                    'Nombre_recibe' => 'Ricardo',
                    'costoT' => 1225.00,
                    'EstatusEnvio' => 'Pedido',
                    'Pago' => false,
                    'producto_id' => 3,
                    'cliente_id'=> 1,
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
            ]

        );
    }
}
