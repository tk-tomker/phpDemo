<!DOCTYPE html>
<html>
    <body>
    <?php
    print_r($_POST);
        $times = $_POST['times'];
        $total = 0;
        $number = 0;

        for($x=0; $x < $times; $x++){
            $number = $_POST["number$x"];
            $total = $total + $number;
        }

        

        $average = $total / $times;
        echo "Your average is ".$average.".";
       
    ?>
    </body>
</html>