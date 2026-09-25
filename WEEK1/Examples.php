<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "Welcone university";
    print "hi guys";
    echo "<";

    // VARIABLES
    $name = "abdiqadir";
    echo "my name is $name". "<br>";

    define ("age", 10);
    echo age ;


    

    // CONTROL STRUCTURE   IF  ELSE
   

    $marks = 87;
    if($marks >= 90 )
        echo "excellent";
    elseif ($marks >=80)
        echo "very good";
    elseif($marks >=70)
        echo "good";
    elseif ($marks >=60)
        echo "avarage";
    else
        echo "fail";
    

    // sWITCH STATEMENT

    $answer = "N";
    switch ($answer) {
        case ($answer == "y" || $answer == "Y"):
            each ("Ther answer was yes");
            break;
        case ($answer == "n" || $answer == "N"):
            echo ("The answer was no");
            break;
        default:
        echo ("Error: $answer was not valid ");
    }



     
    ?>
</body>
</html>


