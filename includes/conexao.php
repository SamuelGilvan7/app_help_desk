<?php  
//Ainda vou fazer o banco de dados!
$hostname = "localhost";
$username = "root";
$password = "";
$database = "";

$conn = mysqli_connect($hostname,$username,$password,$database);
if($conn) {
    echo "Conexão realizada com sucesso!";
}else {
    echo "Erro na conexão: ". mysqli_connect_error();

}
?>