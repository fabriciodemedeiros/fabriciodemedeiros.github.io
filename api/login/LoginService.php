<?php
class LoginService
{
    public function autenticar($data)
    {
        $email = $data['email'] ?? '';
        $senha = $data['senha'] ?? '';

        // Aqui você conecta ao banco e valida os dados
        if (empty($email) || empty($senha)) {
            http_response_code(400);
            return json_encode(["error" => "Email e senha são obrigatórios."]);
        }

        // Exemplo: validação hardcoded (você pode trocar por DB)
        if ($email === 'admin@fasil.com' && $senha === '123456') {
            http_response_code(200);
            return json_encode([
                "message" => "Login realizado com sucesso",
                "token" => base64_encode($email . ':' . time())
            ]);
        }

        http_response_code(401);
        return json_encode(["error" => "Credenciais inválidas."]);
    }
}
