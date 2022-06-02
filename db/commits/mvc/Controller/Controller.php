<?php

 
class Controller {
	
    public function login() {

session_start(); 


	
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		
		
$valid= '../../con/conexao.php';















if(isset($_SESSION['msg'])){
      echo $_SESSION['msg'];
      unset($_SESSION['msg']);
    }
  


   










		
		/* Encaminha os dados a Model para que seja realizado a validação */
		$model = new Model();
		$validacao = $model->validaDados();
		
		/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		$view = new View();
		$view->login($valid); 
       
    }
}

?>
