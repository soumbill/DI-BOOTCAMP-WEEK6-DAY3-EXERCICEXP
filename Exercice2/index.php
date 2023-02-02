<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-Exo1 | Day3</title>
</head>
<body>
    <center>
        <div class="container">
            <h1>Exercise 2 : Calculate Area Of Rectangle</h1>
            <form action="#" method="post">
                <input type="number" placeholder="Entrer la longueur" name="longueur">
                <input type="number" placeholder="Entrer la largeur" name="largeur">
                <input type="submit" value="Calculer" name="soumettre">
            </form>
    
        <?php 
            if (isset($_POST['soumettre'])) {
                $longueur = $_POST['longueur'];
                $largeur = $_POST['largeur'];

                if (!empty($longueur) && !empty($largeur)) {
                    
                    # call function Area_Rectangle
                    echo "L'aire est " . Area_Rectangle($longueur, $largeur) . " cm²";
                }
                else{
                    echo "Veuillez remplir les champ !";
                }
            }

            // Area Of Rectangle
            function Area_Rectangle($longueur, $largeur)
            {
                return $longueur * $largeur ;
            }
        ?>
        </div>
    </center>
</body>
</html>