<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>lab2</title>
</head>
<body>
    <?php
  
  //indexed array
    $cars = array("Volvo", "BMW", "Toyota");
    //display each in new line using loop
    foreach ( $cars as $car) {
        echo $car;
        echo "\n";
    }
    //associative array

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
    //display each in new line using loop
    foreach ( $age as $key => $value) {
        echo $key;
        echo " ";
        echo $value;
        echo "\n";
    }
    


?>
</body>
</html>