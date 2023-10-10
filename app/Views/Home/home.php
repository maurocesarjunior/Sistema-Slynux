<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }

        .sidebar {
            height: 100%;
            width: 200px;
            position: fixed;
            top: 0;
            left: 0;
            background-color: #333;
            padding-top: 20px;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .sidebar a {
            padding: 15px 25px;
            text-decoration: none;
            font-size: 18px;
            color: #fff;
            display: block;
        }

        .sidebar a:last-child {
            margin-top: auto; /* Coloca o botão "Sair" no final do menu */
        }

        .content {
            margin-left: 260px;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body>
    <div class="sidebar">
        <a href="#">Listagem</a>
        <a href="#">Gerar Relatório</a>
        <a href="#">Histórico de Entrada</a>
        <a href="#">Histórico de Saída</a>
        <a href="<?= route_to('logout') ?>">Sair</a>
    </div>

    <div class="content">
        <?php if (session()->has('nome')) : ?>
            <p>Olá, <?= session('nome') ?></p> 
        <?php endif; ?>

    </div>
</body>
</html>
