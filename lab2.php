<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2</title>
</head>
<body>
    <h1>arrays<h1>
    <?php
  
  //indexed array
   echo "indexed array";
   echo"<br>";
   echo"<br>";
    $cars = array("Volvo", "BMW", "Toyota");
    //display each in new line using loop
    foreach ( $cars as $car) {
        echo $car;
        echo "\n";
        echo "<br>";
    }
     echo "<br>";
    //associative array
    echo "associative array";
    echo"<br>";
   echo"<br>";    
    $age = array("befikadu"=>"35", "eyob"=>"97", "ashenafi"=>"43");
    //display each in new line using loop
    foreach ( $age as $key => $value) {
        echo $key;
        echo " ";
        echo $value;
        echo "<br>";
    }

     echo"<br>"; 
   // sort 
   sort($cars);
   echo "<after sorting";
   echo "</after>";
       foreach ( $cars  as $car) {
        echo $car;
        echo "<br>";
    }

     array_push($cars,"vitz" );

     //after push
     echo "after push";
     echo "<br>";
      
      foreach ( $cars as $car) {
        echo $car;
        echo "\n";
        echo "<br>";
    }
    echo "<br>";

?>
</body>
</html>