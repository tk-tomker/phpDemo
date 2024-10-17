<!DOCTYPE html>
<html>
    <body>
    <?php
        $times = $_POST['howMany'];
        for($x=0; $x < $times; $x++){
           echo "<form action='averagecalcresult.php' method='POST'>
           Number $x: <input type='number' name='number$x'><br>";
        }
        echo "
         <input type='hidden' value='$times' name='times'>
        <input type='submit'>
         </form>
        
       ";

        
    ?>
    
    </body>
</html>