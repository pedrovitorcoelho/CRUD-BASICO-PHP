<!-- CONFIGURAÇÕES INICIAIS DO PHP -->

<?php
// Aqui estamos definindo nomes dos elementos (Servidor, usuário e senha do banco, e o nome da base de dados no PhpMyAdmin)
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('BASE', 'cadastro');

//Instanciando a conexão, ou seja, criamos uma variável, que vai conectat com a base de ddos

$conn = new mysqli(HOST, USER, PASS, BASE);


    ?>