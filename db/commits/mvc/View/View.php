<?php

class View {
  
    public function login($xxx){
	
		
		








include($xxx);









?>
      <?php       
        echo "<link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' integrity='sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T' crossorigin='anonymous'>"; ?>
             <?php




 $sql=$pdo->prepare("SELECT * FROM compor  ");
    
   

    $sql-> execute();

    $info = $sql -> fetchALL(); 
    foreach ($info as $key => $value ){

    
echo `


<div class="container">
<div class="row">
   
     











`;
       echo "->Nome do video:<br/>";
echo "<h5 class='card-title'>-->".$value['nome']."</h5>";



      echo "<a href='#'>  <div class='card' style='width: 18rem;margin: 20px;margin-left:30vw; background-color: #ddd;'>";
 echo "<img class='card-img-top' style=´width: 20vw;margin: 20px;margin-left:30vw;´ src=".$value['img_src']."/>";

echo "<style> p{ color: black; font-weight:bold;}</style>";
 echo "<div class='card-body'>";
 
 echo "<p class='card-text'><b>descriçao: </b> ".$value['dscc']."</p>";
 echo "<p class='card-text'><b>competencia primaria: </b>  <br/>".$value['competencia']."</p>";
 echo "<p class='card-text'><b>tema: </b> ".$value['tema']."</p>";
 echo "<p class='card-text'><b>fase: </b> ".$value['fase']."</p>";
 
echo "<br/>";
echo "<a href='../../../src/posts/mvc/rooter.php' class='btn btn-primary'> + add outro video </a>";

   

     

      echo  "<i>";
      echo " <img src= width='30' height='30' class='d-inline-block align-top' alt=''> ";
      echo $value['plist']."------>";
      echo  "</i>";
      



       echo "</div>";
echo "</div>";  
    } }}

?>
   
  
  
    
   