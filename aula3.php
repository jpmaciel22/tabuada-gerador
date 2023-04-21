<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 PHP FOR</title>
</head>
<body>
    <?php
   /* echo "Teste<br>";
    for($i = A; $i <= 100; $i++ )                            
    {
       # if($i>=5)
        echo "$i<br>";
    } */

   /* $i = 1;
    while($i <= 100){
        if($i>=5)
        echo "$i<br>";
        $i+=3;
    } */
   /* for($i=3;$i<=30;$i+=3){
        if($i<=30)
        echo "$i<br>";
    } */
    $i=1;
    echo "tabuada de $i<br>";
    while($i<=10){
        echo "1 x $i = $i<br>";
        $i++;
    } 
    
    $i=2; $d=1;
    echo "tabuada de $i<br>";
    while($i<=20){
        echo "2 x $d = $i<br>";
        $i+=2;
        $d++;
    }
    $i=3; $d=1;
    echo "tabuada de $i<br>";
    while($i<=30){
        echo "3 x $d= $i<br>";
        $i+=3;
        $d++;
    }
    $i=4; $d=1;
    echo "tabuada de $i<br>";
    while($i<=40){
        echo "4 x $d= $i<br>";
        $i+=4;
        $d++;
    }
    $i=5; $d=1;
    echo "tabuada de $i<br>";
    while($i<=50){
        echo "5 x $d= $i<br>";
        $i+=5;
        $d++;
    }
    $i=6; $d=1;
    echo "tabuada de $i<br>";
    while($i<=60){
        echo "6 x $d= $i<br>";
        $i+=6;
        $d++;
    }
    $i=7; $d=1;
    echo "tabuada de $i<br>";
    while($i<=70){
        echo "7 x $d= $i<br>";
        $i+=7;
        $d++;
    }
    $i=8; $d=1;
    echo "tabuada de $i<br>";
    while($i<=80){
        echo "8 x $d= $i<br>";
        $i+=8;
        $d++;
    }
    $i=9; $d=1;
    echo "tabuada de $i<br>";
    while($i<=90){
        echo "9 x $d= $i<br>";
        $i+=9;
        $d++;
    }
    echo "tabuada do celso<br>";
    for ($x = 1; $x <= 10; $x++){
        for ($y = 1; $y <= 10; $y++){
            echo $x." x ".$y." = ".$x*$y."<br>";
        }
    }
    ?>
</body>
</html>