<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('productos')->insert(
            [
                [
                    'Nombre' => 'Mouse M65 Pro RGB',
                    'precioP' => 2400.00,
                    'Estatus' => 'Disponible',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'Enfriamiento Hydro H100x',
                    'precioP' => 1879.00,
                    'Estatus' => 'Agotado',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'Teclado K55 RGB',
                    'precioP' => 1139.00,
                    'Estatus' => 'Disponible',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'Gabinete Crystal460x M65 Pro RGB',
                    'precioP' => 3069.00,
                    'Estatus' => 'Disponible',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'RAM Vengeance RGB Pro',
                    'precioP' => 3189.00,
                    'Estatus' => 'Agotado',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'Ventilador LL140 RGB',
                    'precioP' => 819.00,
                    'Estatus' => 'Disponible',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'Base para audifonos St100 RGB',
                    'precioP' => 1769.00,
                    'Estatus' => 'Agotado',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
            ]

        );
    }
}
