<!DOCTYPE html>
<html>
<head>
	<title>PHP Starter Application</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<link rel="stylesheet" href="style.css" />
</head>
<body>
<div align="center">
	<div><img src="images/cab1.png" class="img-responsive img-circle" alt=""></div>
<div class="contenedor">
            <div class="outer-centrado">
                <div class="inner-centrado">
                
<div  align="center" style="float:left;">
<table border><TD>
				<table>
				<tr>
   <th colspan="2">FOR DATA SCIENTISTE</th>
 </tr> 
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  $sql = "SELECT * from view_for_data";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <TR>
    		<TD ROWSPAN=2>
    		<img src=" <?php echo $row['imagen_servicio']?>"> </img>
    		</TD>
        	<TD><h3><?php echo $row['nombre_servicio']?></h3></TD> 
  	  </TR>
	  <TR>
    		<TD><?php echo $row['descripcion_servicio']?></TD> 
  	  </TR>      
     <?php }
  } else {
      echo "0 results";
  }
  $conn->close();
 ?> 
 </table></TD><TD>
 </div>
 <div style="float:left;">
 <table>
	<tr>
   <th colspan="2">FOR IT PROFESIONALS</th>
 </tr>
 
   <?php
  $servername = "us-cdbr-iron-east-03.cleardb.net";
  $username = "b74ba3320e82ec";
  $password = "2d194843";
  $dbname = "ad_bb6ddb2f34daf52"; 
  // Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);
  // Check connection
  if ($conn->connect_error) {
      die("Connection failed: " . $conn->connect_error);
  }
  
   $sql = "SELECT * from view_for_it";
  $result = $conn->query($sql);
  if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc()) {?>
      <TR>
    		<TD ROWSPAN=2>
    		<img src=" <?php echo $row['imagen_servicio']?>"> </img>
    		</TD>
        	<TD><h3><?php echo $row['nombre_servicio']?></h3></TD> 
  	  </TR>
	  <TR>
    		<TD><?php echo $row['descripcion_servicio']?></TD> 
  	  </TR>     
      
     <?php }
  } else {
      echo "0 results";
  }
  
  $conn->close();
 ?> </TD>
 </table>
  </table>
 </div>
 </div>
            </div>
            <div class="clear">
            </div>
        </div>
<div><img src="images/cab2.png" class="img-responsive img-circle" alt=""></div>
 </div>
</body>
</html>
