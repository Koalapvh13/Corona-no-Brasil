<?php

use Illuminate\Database\Seeder;

class EstadoTableSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $estados =[
            [
                'sigla' => 'AC',
                'nome' => 'Acre',
                'confirmado' =>0,
                'suspeito' =>3,
                'letal' =>0,
                'descartasdo' =>0,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/4c/Bandeira_do_Acre.svg/120px-Bandeira_do_Acre.svg.png',
            ],
            [
                'sigla' => 'AL',
                'nome' => 'Alagoas',
                'confirmado' =>1,
                'suspeito' =>6,
                'letal' =>0,
                'descartasdo' =>7,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/8/88/Bandeira_de_Alagoas.svg/120px-Bandeira_de_Alagoas.svg.png',
            ],
            [
                'sigla' => 'AP',
                'nome' => 'Amapá',
                'confirmado' =>0,
                'suspeito' =>0,
                'letal' =>0,
                'descartasdo' =>0,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0c/Bandeira_do_Amap%C3%A1.svg/120px-Bandeira_do_Amap%C3%A1.svg.png',
            ],
            [
                'sigla' => 'AM',
                'nome' => 'Amazonas',
                'confirmado' =>0,
                'suspeito' =>1,
                'letal' =>0,
                'descartasdo' =>7,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/6b/Bandeira_do_Amazonas.svg/120px-Bandeira_do_Amazonas.svg.png',
            ],
            [
                'sigla' => 'BA',
                'nome' => 'Bahia',
                'confirmado' =>2,
                'suspeito' =>65,
                'letal' =>0,
                'descartasdo' =>36,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/28/Bandeira_da_Bahia.svg/120px-Bandeira_da_Bahia.svg.png',
            ],
            [
                'sigla' => 'CE',
                'nome' => 'Ceará',
                'confirmado' =>0,
                'suspeito' =>22,
                'letal' =>0,
                'descartasdo' =>59,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2e/Bandeira_do_Cear%C3%A1.svg/120px-Bandeira_do_Cear%C3%A1.svg.png',
            ],
            [
                'sigla' => 'DF',
                'nome' => 'Distrito Federal',
                'confirmado' =>2,
                'suspeito' =>75,
                'letal' =>0,
                'descartasdo' =>53,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/3c/Bandeira_do_Distrito_Federal_%28Brasil%29.svg/120px-Bandeira_do_Distrito_Federal_%28Brasil%29.svg.png',
            ],
            [
                'sigla' => 'ES',
                'nome' => 'Espírito Santo',
                'confirmado' =>1,
                'suspeito' =>51,
                'letal' =>0,
                'descartasdo' =>21,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/43/Bandeira_do_Esp%C3%ADrito_Santo.svg/120px-Bandeira_do_Esp%C3%ADrito_Santo.svg.png',
            ],
            [
                'sigla' => 'GO',
                'nome' => 'Goiás',
                'confirmado' =>3,
                'suspeito' =>6,
                'letal' =>0,
                'descartasdo' =>46,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Flag_of_Goi%C3%A1s.svg/120px-Flag_of_Goi%C3%A1s.svg.png',
            ],
            [
                'sigla' => 'MA',
                'nome' => 'Maranhão',
                'confirmado' =>0,
                'suspeito' =>6,
                'letal' =>0,
                'descartasdo' =>2,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/4/45/Bandeira_do_Maranh%C3%A3o.svg/120px-Bandeira_do_Maranh%C3%A3o.svg.png',
            ],
            [
                'sigla' => 'MT',
                'nome' => 'Mato Grosso',
                'confirmado' =>0,
                'suspeito' =>6,
                'letal' =>0,
                'descartasdo' =>7,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/0b/Bandeira_de_Mato_Grosso.svg/120px-Bandeira_de_Mato_Grosso.svg.png',
            ],
            [
                'sigla' => 'MS',
                'nome' => 'Mato Grosso do Sul',
                'confirmado' =>0,
                'suspeito' =>15,
                'letal' =>0,
                'descartasdo' =>16,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/64/Bandeira_de_Mato_Grosso_do_Sul.svg/120px-Bandeira_de_Mato_Grosso_do_Sul.svg.png',
            ],
            [
                'sigla' => 'MG',
                'nome' => 'Minas Gerais',
                'confirmado' =>2,
                'suspeito' =>116,
                'letal' =>0,
                'descartasdo' =>73,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f4/Bandeira_de_Minas_Gerais.svg/120px-Bandeira_de_Minas_Gerais.svg.png',
            ],
            [
                'sigla' => 'PA',
                'nome' => 'Pará',
                'confirmado' =>0,
                'suspeito' =>1,
                'letal' =>0,
                'descartasdo' =>20,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/0/02/Bandeira_do_Par%C3%A1.svg/120px-Bandeira_do_Par%C3%A1.svg.png',
            ],
            [
                'sigla' => 'PB',
                'nome' => 'Paraíba',
                'confirmado' =>0,
                'suspeito' =>16,
                'letal' =>0,
                'descartasdo' =>6,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/bb/Bandeira_da_Para%C3%ADba.svg/120px-Bandeira_da_Para%C3%ADba.svg.png',
            ],
            [
                'sigla' => 'PR',
                'nome' => 'Paraná',
                'confirmado' =>6,
                'suspeito' =>72,
                'letal' =>0,
                'descartasdo' =>34,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/93/Bandeira_do_Paran%C3%A1.svg/120px-Bandeira_do_Paran%C3%A1.svg.png',
            ],
            [
                'sigla' => 'PE',
                'nome' => 'Pernambuco',
                'confirmado' =>2,
                'suspeito' =>18,
                'letal' =>0,
                'descartasdo' =>23,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/5/59/Bandeira_de_Pernambuco.svg/120px-Bandeira_de_Pernambuco.svg.png',
            ],
            [
                'sigla' => 'PI',
                'nome' => 'Piauí',
                'confirmado' =>0,
                'suspeito' =>1,
                'letal' =>0,
                'descartasdo' =>2,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/33/Bandeira_do_Piau%C3%AD.svg/120px-Bandeira_do_Piau%C3%AD.svg.png',
            ],
            [
                'sigla' => 'RJ',
                'nome' => 'Rio de Janeiro',
                'confirmado' =>16,
                'suspeito' =>76,
                'letal' =>0,
                'descartasdo' =>147,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/7/73/Bandeira_do_estado_do_Rio_de_Janeiro.svg/120px-Bandeira_do_estado_do_Rio_de_Janeiro.svg.png',
            ],
            [
                'sigla' => 'RN',
                'nome' => 'Rio Grande do Norte',
                'confirmado' =>1,
                'suspeito' =>12,
                'letal' =>0,
                'descartasdo' =>15,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/3/30/Bandeira_do_Rio_Grande_do_Norte.svg/120px-Bandeira_do_Rio_Grande_do_Norte.svg.png',
            ],
            [
                'sigla' => 'RS',
                'nome' => 'Rio Grande do Sul',
                'confirmado' =>4,
                'suspeito' =>81,
                'letal' =>0,
                'descartasdo' =>203,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/6/63/Bandeira_do_Rio_Grande_do_Sul.svg/120px-Bandeira_do_Rio_Grande_do_Sul.svg.png',
            ],
            [
                'sigla' => 'RO',
                'nome' => 'Rondônia',
                'confirmado' =>0,
                'suspeito' =>2,
                'letal' =>0,
                'descartasdo' =>1,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/fa/Bandeira_de_Rond%C3%B4nia.svg/120px-Bandeira_de_Rond%C3%B4nia.svg.png',
            ],
            [
                'sigla' => 'RR',
                'nome' => 'Roraima',
                'confirmado' =>0,
                'suspeito' =>0,
                'letal' =>0,
                'descartasdo' =>0,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/98/Bandeira_de_Roraima.svg/120px-Bandeira_de_Roraima.svg.png',
            ],
            [
                'sigla' => 'SC',
                'nome' => 'Santa Catarina',
                'confirmado' =>2,
                'suspeito' =>77,
                'letal' =>0,
                'descartasdo' =>34,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/1/1a/Bandeira_de_Santa_Catarina.svg/120px-Bandeira_de_Santa_Catarina.svg.png',
            ],
            [
                'sigla' => 'SP',
                'nome' => 'São Paulo',
                'confirmado' =>56,
                'suspeito' =>753,
                'letal' =>0,
                'descartasdo' =>529,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/2/2b/Bandeira_do_estado_de_S%C3%A3o_Paulo.svg/120px-Bandeira_do_estado_de_S%C3%A3o_Paulo.svg.png',
            ],
            [
                'sigla' => 'SE',
                'nome' => 'Sergipe',
                'confirmado' =>0,
                'suspeito' =>2,
                'letal' =>0,
                'descartasdo' =>3,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/b/be/Bandeira_de_Sergipe.svg/120px-Bandeira_de_Sergipe.svg.png',
            ],
            [
                'sigla' => 'TO',
                'nome' => 'Tocantins',
                'confirmado' =>0,
                'suspeito' =>2,
                'letal' =>0,
                'descartasdo' =>0,
                'bandeira' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/ff/Bandeira_do_Tocantins.svg/120px-Bandeira_do_Tocantins.svg.png',
            ],

        ];
        foreach($estados as $estado){
            DB::table('estados')->insert($estado);
        }
    }
}
