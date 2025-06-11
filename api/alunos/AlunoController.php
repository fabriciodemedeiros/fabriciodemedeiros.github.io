<?php

class AlunoController
{
    public function listar()
    {
        // Simulação de banco de dados:
        $alunos = [
            ["id" => 1, "nome" => "João", "email" => "joao@email.com"],
            ["id" => 2, "nome" => "Maria", "email" => "maria@email.com"],
            ["id" => 3, "nome" => "Fabrício", "email" => "fabricio@email.com"]
        ];

        http_response_code(200);
        return json_encode($alunos);
    }
}
