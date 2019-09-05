<?php
    
    require('config.inc.php');

?>
<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB-230 Classroom</title>
    </head>
    
    <body>
        
        
        <?php 
        
            include_once('include/header.inc.php');
            
            echo 'Here we go!';
            echo 'Here I am';
            
            // Using constant
            echo 'Thank you for visiting - ' . SITE_URL;

            // Try to print variable value
            echo "The color of the sky is " . $color . "<br>";
            echo "The color of the sky is " . $Color . "<br>";
            echo "The color of the sky is " . $COLOR . "<br>";
        
        
            echo $number1 . ' = ' . $number2;

            // Displaying variables
            echo $txt;
            echo "<br>";
            echo $num;
            echo "<br>";
            echo $colors[0];    
        
        
            print "<h4>This is a simple heading.</h4>";
            print "<h4 style='color: red;'>This is heading with style.</h4>";
        
            if(1 === 0){
                echo '<h1>It is</h1>';
            }

            include('include/footer.inc.php');

        ?>
    </body>
</html>


