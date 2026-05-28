<?php 
$mensagens_erro = [
    '01' => 'Acesso negado. Por favor, faça login.',
    '02' => 'E-mail ou senha incorretos.',
    '03' => 'Preencha todos os campos obrigatórios.',
    '04' => 'O formato do e-mail digitado é inválido.',
    '05' => 'Sessão expirada. Faça login novamente.'
];

$erro_cod = $_GET['erro'] ?? '';

$mensagem_exibir = $mensagens_erro[$erro_cod] ?? '';

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>App Help Desk</title>

    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>

<body>

    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="#">
            <img src="assets/img/logo.png" width="35" height="35"
                class="d-inline-block align-top logo" alt="">
            App Help Desk
        </a>
    </nav>

    <div class="container container-login">

        <div class="card-login">

            <div class="card">

                <div class="card-header">
                    Login
                </div>

                <div class="card-body">

                    <div class="texto-bemvindo">
                        Faça login para acessar o sistema
                    </div>

                    <?php if ($mensagem_exibir): ?>
                        <div id="alerta-erro" style="background-color: #ffcccc; color: #990000; padding: 10px; border-radius: 5px; margin-bottom: 15px; border: 1px solid #990000;">
                            <strong>Erro:</strong> <?= htmlspecialchars($mensagem_exibir) ?>
                        </div>
                    <?php endif; ?>

                    <form action="includes/auth.php" method="POST">

                        <div class="form-group">
                            <input name="email" type="email"
                                class="form-control"
                                placeholder="Digite seu e-mail">
                        </div>

                        <div class="form-group">
                            <input name ='senha' type="password"
                                class="form-control"
                                placeholder="Digite sua senha">
                        </div>

                        <button class="btn btn-info btn-block btn-login"
                            type="submit">
                            Entrar
                        </button>

                    </form>

                </div>

            </div>

        </div>

    </div>

</body>
</html>