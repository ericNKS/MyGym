<?php

namespace Database\Seeders;

use App\Models\MetodoPagamento;
use Illuminate\Database\Seeder;

class MetodoPagamentoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        MetodoPagamento::create(['tipo_pagamento' => 'Cartão']);
        MetodoPagamento::create(['tipo_pagamento' => 'Boleto']);
        MetodoPagamento::create(['tipo_pagamento' => 'Pix']);
    }
}
