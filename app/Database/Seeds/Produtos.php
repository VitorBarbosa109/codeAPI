<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class Produtos extends Seeder
{
    public function run()
    {
        $desc = ['Tv', 'Computador', 'Celular'];
        $valor = [1000, 2000, 3000];
        for($x = 0; $x <= 3; $x++) {

            $data = [
                'descricao' => $desc[$x],
                'valor'    => $valor[$x],
            ];

            $this->db->table('produtos')->insert($data);
        }


    }
}