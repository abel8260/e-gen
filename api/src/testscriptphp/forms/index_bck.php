<?php

include('../../gateway/conexao.php');



$_SESSION["inv_id"] =$_GET["country"];


$inv_id = $_SESSION["inv_id"];



echo '<!DOCTYPE html>';
echo '<script>console.log("';

 $result_usuarios = $pdo-> prepare( "SELECT * FROM apiresponse   WHERE  cod = '$inv_id' ORDER BY id DESC LIMIT 1");
$result_usuarios-> execute();



$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        

        
 echo "cod=".$row_usuario["cod"]."";
 
          
 echo "type=".$row_usuario["typ"]."";

         
 echo "msg=".$row_usuario["msg"]."";
            
 echo "src=".$row_usuario["tag"]."";




 echo "<br/>";



        
 
};

  
echo '")</script>';

      
 

?>

<?php

include('../../gateway/conexao.php');



$_SESSION["inv_id"] =$_GET["country"];


$inv_id = $_SESSION["inv_id"];





 $result_usuarios = $pdo-> prepare( "SELECT * FROM apiresponse   WHERE  cod = '$inv_id' ORDER BY id DESC LIMIT 1");
$result_usuarios-> execute();



$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        

        
 echo "cod=".$row_usuario["cod"]."";
 
          
 echo "type=".$row_usuario["typ"]."";

         
 echo "msg=".$row_usuario["msg"]."";
            
 echo "src=".$row_usuario["tag"]."";




 echo "<br/>";



        
 
};

  


      
 

?>
  
