<!DOCTYPE html>
<html dir="ltr">
  <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Sensors's Value</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Quantico&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">

  </head>

  <body>
  <div class="container"  >
    <div style="background-color:rgba(239,239,239,0.5) ; width:50% ; margin-left:17em ; margin-top:10em" >

    
     <h1 class="text-center mt-5" style="margin-bottom:20px;  " >Sensors's Value</h1>

      <div style="margin-left:8em;" >

        <form action="sensor.php" method="get"> <!-- default get-->
          <h6 style="margin-right:2em ; display:inline-block">Value</h6>
          <input type="text" name="value" id="txt1" placeholder="390">
          <br><br>
          <h6 style="margin-right:2.5em ; display:inline-block">Unit</h6>
          <input type="text" name="unit" id="txt2" placeholder="V">
          <br><br><br>
          <input type="image" src="images/submit.png" alt="Submit" height ="30" width="70" style="margin-left:8em;"  >
      
        </form>
      </div>
      
    </div>

  </div>
    
  </body>



</html>