<?php

namespace Database\Seeders;

use App\Models\Plano;
use Illuminate\Database\Seeder;

class PlanoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        Plano::create([
            'plano' => 'Frango',
            'valor' => 100.99,
            'descricao' => 'O nosso plano Frango vai ser uma otima opcação para você que está começando a treinar e está com a grana apertada'
        ]);

        Plano::create([
            'plano' => 'Frango Carente',
            'valor' => 180.99,
            'descricao' => 'O nosso plano Frango vai ser uma otima opcação para você que está começando a treinar e precisa de acompanhamento 
            profissional para poder sair dos seus 40Kg'
        ]);

        Plano::create([
            'plano' => 'Rato de Academia',
            'valor' => 200.99,
            'descricao' => 'No nosso plano Rato de Academia além de você ter acesso a toda nossa academia você vai poder ter consulta particular
            com nossos nutricionistas alem de ter acesso a sala de sauna pra não ficar retido'
        ]);

        Plano::create([
            'plano' => 'Maromba',
            'valor' => 400.99,
            'descricao' => 'No nosso plano Maromba além de você ter acesso a toda nossa academia você vai poder ter consulta particular
            com nossos nutricionistas, ter 4 consultas por mês com nossos preparadores fisicos além de ter acesso a todas as nossas salas VIPs'
        ]);

    }
}
