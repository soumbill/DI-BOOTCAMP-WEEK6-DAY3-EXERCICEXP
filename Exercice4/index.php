<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ExerciceXP-exo4 | Day3</title>
</head>
<body>
    <center>
        <div class="container">
            <h1>Exercise 4 : Convert Word To Digit</h1>

            <?php
                $word = "zero;un;deux;three;four;five;six;seven;eight;nine";

                function word_digit($word) {
                    $warr = explode(';',$word);
                    $result = '';
                    foreach($warr as $value){
                        switch(trim($value)){
                            case 'zero':
                                $result .= '0';
                                break;
                            case 'one':
                                $result .= '1';
                                break;
                            case 'two':
                                $result .= '2';
                                break;
                            case 'three':
                                $result .= '3';
                                break;
                            case 'four':
                                $result .= '4';
                                break;
                            case 'five':
                                $result .= '5';
                                break;
                            case 'six':
                                $result .= '6';
                                break;
                            case 'seven':
                                $result .= '7';
                                break;
                            case 'eight':
                                $result .= '8';
                                break;
                            case 'nine':
                                $result .= '9';
                                break;    
                        }
                    }
                    return $result;
                }

                echo word_digit("zero;three;five;six;eight;one")."<br>";
                echo word_digit("seven;zero;one")."\n";
            ?>        
        </div>
    </center>
</body>
</html>