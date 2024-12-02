<!DOCTYPE html>
<html>
    <head>
        <title>Lab 5a q3</title>
    </head>
    <body>
        <?php
            function calculateArea($length, $width) {
            return $length * $width;
            }

            $width = 4;
            $length = 2;

            $area = calculateArea($length, $width);
            echo "<p>The area of a rectangle with a width of <strong>$width</strong> and <strong>$length</strong> is <strong>$area</strong></p>";
        ?>
    </body>
</html>