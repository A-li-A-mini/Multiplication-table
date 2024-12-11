<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication table</title>
</head>
<body>
   <table border="1px">
    <?php
    for($i=1;$i<=10;$i++){
        echo "<tr>";
        
        for($j=1;$j<=10;$j++){
            $x=$i*$j;
            echo "<td>$x</td>";
        }
        
        echo"</tr>";
    }
    ?>
    </table>
</body>
</html>