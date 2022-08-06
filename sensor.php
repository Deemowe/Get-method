<!DOCTYPE html>
<html dir="rtl">
  <head>

  </head>

  <body>
    <?php
    $server = "localhost";
    $user = "root";
    $pass= "";
    $DB = "sensor values";

    $con = mysqli_connect ($server ,$user, $pass , $DB) 
    or die (mysqli_connect_error());
    echo "connect <br>";
  
    mysqli_select_db($con,$DB)
    or die (mysqli_connect_error());
    echo "select <br>";

    $creat= "CREATE TABLE IF NOT EXISTS sensor_values(
      id INT NOT NULL AUTO_INCREMENT,
      PRIMARY KEY (id),
      num INT,
      unit VARCHAR (4)
      )";


    mysqli_query($con , $creat)
    or die (mysqli_connect_error());
    echo "create <br>";


  //column id is inserte auto by it self! 
    $insert="INSERT INTO sensor_values (num , unit) VALUES (' " .$_GET["value"]. " ' , ' " .$_GET["unit"]. " ')";

    mysqli_query($con ,$insert )
    or die (mysqli_connect_error());
    echo "insert";


    header("Location:indix.php");
    
    
    ?>
  
  </body>

</html>