<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CountriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $countries = [
            [
                'name' => 'Argentina',
                'population' => 44940000,
                'capital' => 'Buenos Aires',
                'language' => 'Spanish',
                'currency' => 'ARS',
                'is_active' => true,
            ],
            [
                'name' => 'Bolivia',
                'population' => 11510000,
                'capital' => 'La Paz',
                'language' => 'Spanish, Quechua, Aymara',
                'currency' => 'BOB',
                'is_active' => true,
            ],
            [
                'name' => 'Brazil',
                'population' => 213500000,
                'capital' => 'Brasília',
                'language' => 'Portuguese',
                'currency' => 'BRL',
                'is_active' => true,
            ],
            [
                'name' => 'Chile',
                'population' => 19220000,
                'capital' => 'Santiago',
                'language' => 'Spanish',
                'currency' => 'CLP',
                'is_active' => true,
            ],
            [
                'name' => 'Colombia',
                'population' => 50340000,
                'capital' => 'Bogotá',
                'language' => 'Spanish',
                'currency' => 'COP',
                'is_active' => true,
            ],
            [
                'name' => 'Ecuador',
                'population' => 17370000,
                'capital' => 'Quito',
                'language' => 'Spanish',
                'currency' => 'USD',
                'is_active' => true,
            ],
            [
                'name' => 'Paraguay',
                'population' => 7150000,
                'capital' => 'Asunción',
                'language' => 'Spanish, Guaraní',
                'currency' => 'PYG',
                'is_active' => true,
            ],
            [
                'name' => 'Peru',
                'population' => 32820000,
                'capital' => 'Lima',
                'language' => 'Spanish, Quechua, Aymara',
                'currency' => 'PEN',
                'is_active' => true,
            ],
            [
                'name' => 'Uruguay',
                'population' => 3474000,
                'capital' => 'Montevideo',
                'language' => 'Spanish',
                'currency' => 'UYU',
                'is_active' => true,
            ],
            [
                'name' => 'Venezuela',
                'population' => 28440000,
                'capital' => 'Caracas',
                'language' => 'Spanish',
                'currency' => 'VES',
                'is_active' => true,
            ],
        ];

        DB::table('countries')->insert($countries);
    }
}
