<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usuarios = simplexml_load_file('usuarios.xml');
        $novoUsuario = $usuarios->addChild('usuario');
        $novoUsuario->addChild('nome', $_POST['nome']);
        $novoUsuario->addChild('celular', $_POST['celular']);
        $novoUsuario->addChild('email', $_POST['email']);
        $novoUsuario->addChild('senha', md5($_POST['senha']));
        $usuarios->asXML('usuarios.xml');
        echo "Usuário cadastrado com sucesso! <a href='login.php'>Fazer Login</a>";
    } else {
    ?>
    <form method="POST">
        Nome: <input type="text" name="nome" required><br>
        Celular: <input type="text" name="celular" required><br>
        Email: <input type="email" name="email" required><br>
        Senha: <input type="password" name="senha" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <?php } ?>
</body>
</html>