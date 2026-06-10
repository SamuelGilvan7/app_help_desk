<?php
session_start();
/*

    unset($_SESSION['usuario']) - Remove apenas uma variável da sessão
    session_unset() - Remove todas as variáveis da sessão
    session_destroy() -	Destrói completamente a sessão

*/

//Remover índeces do array de sessão
//unset()
//unset($_SESSION['X']);




//Destruir a variável de sessão
//session_destroy()
session_destroy();

header('Location:../index.php');

?>