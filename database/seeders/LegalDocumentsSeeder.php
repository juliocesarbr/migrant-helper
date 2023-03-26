<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LegalDocumentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $legalDocuments = [
            [
                'name' => 'CPP',
                'description' => 'Certificado de Permanencia Definitiva',
                'country_id' => 8,
            ],
            [
                'name' => 'Carnét De Extranjería',
                'description' => 'Documento de identidad para extranjeros residentes en Perú',
                'country_id' => 8,
            ],
        ];

        DB::table('legal_documents')->insert($legalDocuments);
    }
}
