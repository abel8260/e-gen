<?php

/* Realiza a inclusão dos arquivos com os códigos Model, View, Controller*/

	
/* Pega a ação passada pela URL*/


/* Valida a ação passada, verifica se ela existe e se ela e o login 
 * Se a ação for exisir e for login inicia a função login do Controller
 * Se não inicia a função login da View*/
    
/* Pega o resultado da validação realizada no Model e o encaminha para ser exibido pela View */
		 
  



  include 'Model/Model.php';
  include 'View/View.php';
  

  use bar as canine;
  echo canine\Model::validaDados(), "<br />\n";   
  use animate as anim ;
  echo anim\View::loginnnn(), "<br />\n"; 

        //use other\animate as animate;
  

  
  
 ?>


