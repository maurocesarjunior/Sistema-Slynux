<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<body>
    <h1>Bem-vindo à página inicial</h1>

    <?php if (session()->has('nome')) : ?>
        <p>Olá, <?= session('nome') ?></p> <!-- Exibe o nome do usuário da sessão -->
    <?php endif; ?>

    <!-- Conteúdo da página inicial -->
</body>
</html>
