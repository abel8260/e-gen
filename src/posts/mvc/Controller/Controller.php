<?php  

  Controller::login();

class Controller {
	
     static  function login() {




	
		/* Pega o usuário e senha preenchidos no formulário de login da View */
		
		
				
		
 $validd= '../../con/conexao.php';



 $theme = isset($_POST["theme"]) ? $_POST['theme'] : 'theme';
$fname = isset($_POST["fname"]) ? $_POST['fname'] : 'fname';
$description = isset($_POST["description"]) ? $_POST['description'] : 'description';

$comp = isset($_POST["comp"]) ? $_POST['comp'] : 'comp';

 $imgsrc =isset($_POST["imgsrc"]) ? $_POST['imgsrc'] : 'imgsrc';

 $plisty =isset($_POST["plisty"]) ? $_POST['plisty'] : 'plisty';
 
 $phaser = isset($_POST["phaser"]) ? $_POST['phaser'] : 'phaser';
		
$valid= '../con/conexao.php';

include($validd);




  $stmt = $pdo->prepare('INSERT INTO compor (id,tema, nome, dscc, competencia, img_src, plist, fase) VALUES(:id, :tema, :nome, :dscc, :competencia, :img_src, :plist, :fase )');
  $stmt->execute(array(
    ':id'   => NULL,
    ':tema' => $theme,
    ':nome'   => $fname,
    ':dscc' => $description,
    ':competencia'   => $comp,
    ':img_src' => $imgsrc,
    ':plist'   => $plisty,
    ':fase' => $phaser,
  ));

  echo $stmt->rowCount();
}}
 header("location: ../../../../db/commits/mvc/rooter.php ") 
?>