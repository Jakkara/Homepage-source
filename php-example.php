<!DOCTYPE html>
<html>
    <body>
        <?php
        $x = 5 + 5;
        $y = 15.232;
        echo $x;

        function myTest(){
            echo "<p>This is an HTML element inside a PHP function</p>";
            global $x;
            echo "<p> And this accesses the $x from globals</p>";
        }
        myTest();
        ?>
    </body>
</html>