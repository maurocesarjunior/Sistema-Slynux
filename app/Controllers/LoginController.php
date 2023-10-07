<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    public function index()
    {
        // Carrega a view de login
        return view('Acesso/login');
    }
}
