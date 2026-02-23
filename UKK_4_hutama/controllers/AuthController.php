<?php

include_once __DIR__ . '../../models/m_koneksi.php';

class AuthController {
    public function login() {
        // Hanya memanggil tampilan login
        require_once '../views/auth/login.php';
    }

    public function register() {
        // Hanya memanggil tampilan register
        require_once '../views/auth/register.php';
    } 
}
