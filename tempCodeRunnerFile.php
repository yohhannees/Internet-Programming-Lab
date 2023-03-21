  <?php
    // $x=5;
    // $y=10;
    // function myTest() {
    //      global $x, $y;
    //     $y = $x + $y;
    // }
    echo nl2br("before swap");
        $x=1;
        $y=2;
        echo "\n";
        echo " $x";
        echo "\n";
        echo " $y";
        echo "\n";
       
       //swap
        $temp=$x;
        $x=$y;
        $y=$temp;
      
        echo "after swap";
     
        echo "\n";
        echo " $x";
        echo "\n";
        echo " $y";

       
        $favcolor=red;

        switch ($favcolor) {
            case "red":
                echo "Your favorite color is red!";
                break;
            case "blue":
                echo "Your favorite color is blue!";
                break;
            case "green":
                echo "Your favorite color is green!";
                break;
            default:
                echo "Your favorite color is neither red, blue, nor green!";
        }
    ?>
