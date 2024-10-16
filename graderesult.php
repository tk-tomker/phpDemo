<!DOCTYPE html>
<html>
    <body>
    <?php
        $analyasis = $_POST['analyasis'];
        $design = $_POST['design'];
        $implementation = $_POST['implementation'];
        $evaluation = $_POST['evaluation'];
        $total = $analyasis +  $design + $implementation + $evaluation;
        echo("Your total mark out of 100 is ".$total.".<br>");

        if($total < 3){
            echo ("You achieved a grade U");
        }
        elseif ($total < 12){
            echo ("You achieved a grade G");
        }
        elseif($total < 21){
            echo ("You achieved a grade F");
        }
        elseif($total < 30){
            echo ("You achieved a grade E");
        }
        elseif($total < 40){
            echo ("You achieved a grade D");
        }
        elseif($total < 53){
            echo ("You achieved a grade C");
        }
        elseif($total < 66){
            echo ("You achieved a grade B");
        }
        elseif($total < 79){
            echo ("You achieved a grade A");
        }
        elseif($total < 101){
            echo ("You achieved a grade A*");
        }
    ?>
    </body>
</html>