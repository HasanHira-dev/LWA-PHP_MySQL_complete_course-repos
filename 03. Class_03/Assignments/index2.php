<?php
    # ----------------- Task - 13 ----------------- #

    echo "<h2>13. Create a pyramid like this:</h2>";
/*

1
1 2
1 2 3
1 2 3 4
1 2 3 4 5

*/

for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo $j . "&nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 13 (end) ============



    # ----------------- Task - 14 ----------------- #

    echo "<h2>14. Create a pyramid like this:</h2>";
/*

1
2 2
3 3 3
4 4 4 4
5 5 5 5 5

*/

for($i=1; $i<=5; $i++){
    for($j=1; $j<=$i; $j++){
        echo $i . "&nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 14 (end) ============



    # ----------------- Task - 15 ----------------- #

    echo "<h2>15. Create a pyramid like this:</h2>";
/*

1
2 1
3 2 1
4 3 2 1
5 4 3 2 1

*/

for($i=1; $i<=5; $i++){
    for($j=$i; $j>=1; $j--){
        echo $j . "&nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 15 (end) ============



    # ----------------- Task - 16 ----------------- #

    echo "<h2>16. Create Floyd’s Triangle:</h2>";
/*

1
2 3
4 5 6
7 8 9 10

*/

$n = 1;
for($i=1; $i<=4; $i++){
    for($j=1; $j <=$i; $j++){
        echo $n . "&nbsp;&nbsp;&nbsp;";
        $n++;
    }
    echo "<br>";
}
