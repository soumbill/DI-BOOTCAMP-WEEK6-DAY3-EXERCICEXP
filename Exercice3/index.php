<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo3 | Day3</title>
</head>
<body>
    <center>
        <div class="container">
            <h1>Exercise 3 : Test Number</h1>
            <?php 
                function trinary_Test($n){
                    $r = $n > 30
                    ? "greater than 30"
                    : ($n > 20 
                    ? "greater than 20"
                    : ($n > 10 
                    ? "greater than 10"
                    : "Input a number atleast greater than 10 !"));

                    echo $n. " : ". $r . "\n";
                }
                trinary_Test(25);
            ?>
        </div>
    </center>
</body>
</html>