<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP - Day3</title>
</head>
<body>
    <div class="container">
       <h1>Exercise 1 : Check Eligibility For Voting</h1>
       <form action="#" method="post">
            <input type="number" placeholder="Entrer votre age" name="age">
            <input type="submit" value="Soumettre" name="soumettre">
       </form> 

       <?php 
            if(isset($_POST['soumettre']))
            {
                $age = $_POST['age'];

                if($age >= 18)
                {
                    echo "Bravo, Vous avez l'age";
                }
                else{
                    echo "L'âge minimum requis pour voter est de 18 ans."; 
                }
        
            }
            else
            {
                echo "Veuillez remplir le champ";
            }
       ?>
    </div>
    

</body>
</html>