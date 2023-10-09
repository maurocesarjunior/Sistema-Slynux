<?php

namespace App\Controllers;

use App\Models\LoginModel;
use CodeIgniter\Controller;

class LoginController extends Controller
{
    private $LoginModel;

    public function __construct()
    {
        $this->LoginModel = new LoginMOdel();

    }
    public function index()
    {
        return view('Acesso/login');
    }

    public function store()
    {
        $username = $this->request->getPost('username');
        $password = $this->request->getPost('password');

        // Carrega a model LoginModel
        $loginModel = new LoginModel();

        // Verifique o login usando o modelo
        $user = $loginModel->login($username, $password);

        if ($user) {
            session()->set('nome', $user['nome']);
            // Login bem-sucedido, faça o redirecionamento ou ação apropriada
            return redirect()->to('home'); // Substitua 'dashboard' pela rota desejada após o login
        } else {
            // Login falhou, exiba uma mensagem de erro
            $data['error'] = 'Usuário ou senha incorretos';
            return view('Acesso/login', $data);
        }
    }


}