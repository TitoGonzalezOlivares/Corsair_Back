<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;
class clientesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('clientes')->insert(
            [
                [
                    'Nombre' => 'RICARDO ',
                    'apellidos' => 'OCHOA ARRIETA',
                    'email' => 'RicarditoCacuni@gmail.com',
                    'celular' => '4495261492',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'EVA MARIA',
                    'apellidos' => 'VASCO CARNERO',
                    'email' => 'Evavasco56@gmail.com',
                    'celular' => '4496851239',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'TOMAS ALVARO',
                    'apellidos' => 'MAZA PINEDA',
                    'email' => 'Alvaruu85Pineda@hotmail.com',
                    'celular' => '4498572355',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
                [
                    'Nombre' => 'SANTIAGO MANUEL',
                    'apellidos' => 'RAMOS RIBEIRO',
                    'email' => 'RamosMany852@yahoo.com',
                    'celular' => '4498517492',
                    'created_at'=> Carbon::now(),
                    'updated_at'=> Carbon::now(),
                ],
            ]

        );
    }
}
