<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
echo "<h3>Example of multiple using while loop </h3>";
     $count = 1;
    while ($count<=12)
        {
            echo "$count times 12 is ".$count * 12 . "<br>";
            ++$count;
        }
        echo "<br>";


        
    echo "<h3>Example of Do While loop using factorial number</h3>";

    $result = 1;
    $n = 5;
    do {
        $result *=$n;
        echo "the valua of n is: $n <br>";
        $n--;
    } while ($n >0);
    echo "the factorial of 5 is:$result <br>" ;

    echo "<h3>Example of nested loop to print multiplication table</h3>";
    for ($i= 1; $i<=3;$i++) //row loop
        for ($j=1;$j<=5;$j++) //column loop
        echo("$i*$j=".($i * $j) . "<br>");





    ?>
</body>
</html>