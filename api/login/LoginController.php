<?php
require_once __DIR__ . '/LoginService.php';

class LoginController
{
    public function login($data)
    {
        $service = new LoginService();
        return $service->autenticar($data);
    }
}
