<!DOCTYPE html>
<html>
<head>    <title>E-genese</title>
 <!--
           <meta property="og:image" content="../../../img_geral/Screenshot.png" />tags pro favicon-->
           <link rel="icon" type="image/svg" href="../../../img_geral/drawing.svg" >
</head>
<body style="background-color: darkgrey ; color: white;" >

    <div style="border:2px solid #ccc; display: inline-block;float: left; width:100vw;margin:0px; ">
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:2vw; "><svg
   xmlns:dc="http://purl.org/dc/elements/1.1/"
   xmlns:cc="http://creativecommons.org/ns#"
   xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#"
   xmlns:svg="http://www.w3.org/2000/svg"
   xmlns="http://www.w3.org/2000/svg"
   xmlns:sodipodi="http://sodipodi.sourceforge.net/DTD/sodipodi-0.dtd"
   xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape"
   width="6mm"
   height="6mm"
   viewBox="0 0 200 200"
   version="1.1"
   id="svg8"
   inkscape:version="1.0.2 (e86c870879, 2021-01-15)"
   sodipodi:docname="drawing.svg">
  <defs
     id="defs2" />
  <sodipodi:namedview
     id="base"
     pagecolor="#ffffff"
     bordercolor="#666666"
     borderopacity="1.0"
     inkscape:pageopacity="0.0"
     inkscape:pageshadow="2"
     inkscape:zoom="0.35"
     inkscape:cx="400"
     inkscape:cy="331.42857"
     inkscape:document-units="mm"
     inkscape:current-layer="layer1"
     inkscape:document-rotation="0"
     showgrid="false"
     inkscape:window-width="1362"
     inkscape:window-height="704"
     inkscape:window-x="0"
     inkscape:window-y="0"
     inkscape:window-maximized="0" />
  <metadata
     id="metadata5">
    <rdf:RDF>
      <cc:Work
         rdf:about="">
        <dc:format>image/svg+xml</dc:format>
        <dc:type
           rdf:resource="http://purl.org/dc/dcmitype/StillImage" />
        <dc:title></dc:title>
      </cc:Work>
    </rdf:RDF>
  </metadata>
  <g
     inkscape:label="Layer 1"
     inkscape:groupmode="layer"
     id="layer1">
    <ellipse
       style="opacity:0.795195;fill:#2023ff;fill-opacity:1;stroke:#7a2893;stroke-width:9.165;stroke-linecap:round;stroke-linejoin:round;stroke-miterlimit:4;stroke-dasharray:none;stroke-opacity:1;paint-order:markers fill stroke"
       id="path833"
       cx="101.47128"
       cy="101.94939"
       rx="67.101685"
       ry="71.655418" />
    <text
       xml:space="preserve"
       style="font-style:normal;font-weight:normal;font-size:63.3264px;line-height:1.25;font-family:sans-serif;fill:#ffffff;fill-opacity:1;stroke:none;stroke-width:1.58316;"
       x="63.200428"
       y="94.26062"
       id="text839"
       transform="scale(0.76530798,1.3066635)"><tspan
         sodipodi:role="line"
         id="tspan837"
         x="63.200428"
         y="94.26062"
         style="stroke-width:1.58316;fill:#ffffff;">e-ge</tspan></text>
  </g>
</svg>



</div>
      <div style="border:2px solid #ccc;display: inline-block;float: left; width:16vw; ">api do egenese </div>
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:50vw; ">                              ww2.egenese.com.br/api</div>
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:30vw; ">
        <div style="border:2px solid #ccc; display: inline-block;float: left; width:27vw; ">usuario nao identificado </div>
        <div style="border:2px solid #ccc; display: inline-block;float: left; width:2vw;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-arrow-90deg-down" viewBox="0 0 16 16">
  <path fill-rule="evenodd" d="M4.854 14.854a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V3.5A2.5 2.5 0 0 1 6.5 1h8a.5.5 0 0 1 0 1h-8A1.5 1.5 0 0 0 5 3.5v9.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4z"/>
</svg></div>

      
    </div>
    <div style="border:2px solid #ccc; display: inline-block;float: left; width:100vw;margin:0px; ">
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:24vw; height: 36vh;"><img src="../../../img_geral/Screenshot4.png" width=330vw; height= 207vh/></div>
      <div style="border:2px solid #ccc;display: inline-block;float: left; width:24vw; height: 36vh;"><img src="../../../img_geral/Screenshot3.png" width=330vw; height= 207vh/></div>
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:24vw; height: 36vh;"><img src="../../../img_geral/Screenshot2.png" width=330vw; height= 207vh/></div>
      <div style="border:2px solid #ccc; display: inline-block;float: left; width:25vw; height: 36vh;"><img src="../../../img_geral/Screenshot1.png" width=330vw; height= 207vh/></div>
      
    </div>
    </div>
    <div style="border:2px solid #ccc; display: inline-block;float: left; width:100vw;margin:0px; "><a href="../../api/home.php">read-me </a> </div>
    <hr/>


<div style="margin-top: 50vh; margin-left: 45vw"   class="container">
  <br/>
<br/>
<br/>
<br/>
<br/>
  <form action="index_bck.php" method="GET">
  
 
      <label for="country"><b>res:</b></label>
    |-
      <select id="country" name="country">



        <?php

include('../../gateway/conexao.php');


        $sql  = "SELECT * FROM apiresponse ORDER BY cod ASC   ";
$result_usuarios = $pdo->query($sql);


$resultado_usuarios = $result_usuarios-> fetchAll( PDO::FETCH_ASSOC );

foreach($resultado_usuarios as  $row_usuario) {

        
        
 echo "<option value=".$row_usuario["cod"].">".$row_usuario["cod"]."</option>";
 
  
};

  


      
 

?>
       
      </select>
 
|==
  
    <input type="submit" value="Submit"></input>
  
  </form>
</div>

</body>
</html>
