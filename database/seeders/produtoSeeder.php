<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class produtoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('produtos')->insert([

         ['nome'=>'Arma de Plasma',
         'descricao'=>'Arma para pulverizar os inimigos.',
         'valor'=> 200.00,
         'foto'=> 'https://i.pinimg.com/originals/0a/82/9d/0a829d25eb6e596e443f3df33f15aa98.jpg',
         'user_id'=> 1,

        ],


['nome'=>'Helicoptero de batalha',
'descricao'=>'Veiculo tripulado com armas e blindagem.',
'valor'=> 20000,
'foto'=> 'https://www.airway.com.br/wp-content/uploads/2016/01/kamov-ka-52.jpg',
'user_id'=> 1,


    ],

['nome'=>'Uranio Enriquecido',
         'descricao'=>'Para cientistas de garagem e aspirantes a cientista.',
         'valor'=> 500000,
         'foto'=> 'https://img.freepik.com/fotos-gratis/residuos-radioativos-em-barris-repositorio-de-residuos-nucleares-ia-generativa_8829-2882.jpg',
         'user_id'=> 1,


 ] ,



        [ 'nome'=>'Contagio numero 17',
         'descricao'=>'Toxina altamente explosiva, pode ser usada como igrediente de remédios.',
         'valor'=> 500,
         'foto'=> 'https://c8.alamy.com/compit/m7a85t/dna-acido-desossiribonucleico-prova-con-flaconcini-di-liquido-verde-illustrazione-m7a85t.jpg',
         'user_id'=> 1,


        ],

        ]
    );
}



            

    };

