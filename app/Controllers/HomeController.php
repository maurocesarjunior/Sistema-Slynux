<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // Carrega a view da página inicial
        return view('Home/home');
    }
}
