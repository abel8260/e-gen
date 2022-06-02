
<?php 
define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DBNAME', 'compor');
define('PORT', '8080');

try {
    $pdo = new PDO("mysql:host=".HOST.";dbname=".DBNAME.";port=".PORT."; ",USER, PASS);
    /*echo "Conexão com banco de dados realizada com sucesso.";*/
} catch (PDOException $e) {
   /* echo "Erro: Conexão com banco de dados não foi realizada com sucesso. Erro gerado " . $e->getMessage();*/
} 

?>