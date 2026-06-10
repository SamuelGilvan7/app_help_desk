<?php 
session_start();

if($_SERVER["REQUEST_METHOD"] === "POST"){

    $usuarios_app = array(
    array('email' => 'adm@teste.com.br' ,'senha' => '123456'),
    array('email' => 'user@teste.com.br','senha' => 'abcd'));

    $email = trim($_POST['email'] ?? '');
    $senha = $_POST['senha'] ?? '';

    // 1. Validação de campos vazios
    if($email === '' || $senha === '') {
        header('Location:../index.php?erro=03');
        exit;
    
    }// 2. Validação do formato do e-mail (Corrigido a variável)
    elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)) {
        header('Location:../index.php?erro=04');
        exit;

    } else {
        $autenticado = false;
        foreach( $usuarios_app as $login){
            if($login['email'] === $email && $login['senha'] === $senha) {
                $autenticado = true;
                break;
            }else{
                header('Location:../index.php?erro=02');
            }
        }

        if($autenticado){
            $_SESSION["auth"] = "YES"; 
             header('Location:../home.php');
        } else {
            $_SESSION["auth"] = "NO";
            header('Location:../index.php?erro=06');
        }

    }
}else {
    header('Location:../index.php?erro=01');
    exit;
}
?>