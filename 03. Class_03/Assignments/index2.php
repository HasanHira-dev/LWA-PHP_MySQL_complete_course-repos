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
    for($j=1; $j<=$i; $j++){
        echo $n . "&nbsp;&nbsp;&nbsp;";
        $n++;
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 16 (end) ============



    # ----------------- Task - 17 ----------------- #

    echo "<h2>17. Create a pyramid like this:</h2>";
/*

          1
       2  1  2
    3  2  1  2  3
 4  3  2  1  2  3  4

*/

for($i=1; $i<=4; $i++){
    for($j=3; $j>=$i; $j--){
        echo "&nbsp;&nbsp;&nbsp;&nbsp;";
    }
    for($k=$i; $k>=1; $k--){
        echo $k ."&nbsp;&nbsp;";
    }
    for($m=2; $m<=$i; $m++){
        echo $m ."&nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 17 (end) ============



    # ----------------- Task - 18 ----------------- #

    echo "<h2>18. Print row-wise multiplication table (up to 5 rows)</h2>";
/*

1 2 3 4 5
2 4 6 8 10
3 6 9 12 15
4 8 12 16 20
5 10 15 20 25

*/

for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        echo $j * $i ."&nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 18 (end) ============



    # ----------------- Task - 19 ----------------- #

    echo "<h2>19. Print diagonal number pattern</h2>";
/*

1 0 0 0 0  
0 2 0 0 0  
0 0 3 0 0  
0 0 0 4 0  
0 0 0 0 5

*/

for($i=1; $i<=5; $i++){
    for($j=1; $j<=5; $j++){
        if($i==$j){
            echo $j ."&nbsp;&nbsp;";
            // break;
            continue;
        }
        echo "0 &nbsp;&nbsp;";
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 19 (end) ============



    # ----------------- Task - 20 ----------------- #

    echo "<h2>20. Print pattern with alternating 1 and 0</h2>";
/*

1
0 1
1 0 1
0 1 0 1

*/

for($i=5; $i>=1; $i--){
    for($j=$i; $j<=5; $j++){
        if($j % 2 == 1){
            echo "1 &nbsp;&nbsp;";
        } elseif($j % 2 == 0){
            echo "0 &nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 20 (end) ============



    # ----------------- Task - 21 ----------------- #

    echo "<h2>21. Print a checkerboard of 1s and 0s (5x5)</h2>";
/*

1 0 1 0 1  
0 1 0 1 0  
1 0 1 0 1  
0 1 0 1 0  
1 0 1 0 1

*/

for($i=1; $i<=5; $i++){
    for($j=$i; $j<=5; $j++){
        if($j % 2 == 1){
            echo "1 &nbsp;&nbsp;";
        } elseif($j % 2 == 0){
            echo "0 &nbsp;&nbsp;";
        }
    }
    for($k=$i; $k>1; $k--){
        if($k % 2 != 1){
            echo "1 &nbsp;&nbsp;";
        } elseif($k % 2 != 0){
            echo "0 &nbsp;&nbsp;";
        }
    }
    echo "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 21 (end) ============



    # ----------------- Task - 22 ----------------- #

    echo "<h2>22. Print a box of row and column indices</h2>";
/*

[1,1] [1,2] [1,3]  
[2,1] [2,2] [2,3]  
[3,1] [3,2] [3,3]

*/

for($i=1; $i<=3; $i++){
    for($j = 1; $j<=3; $j++){
        echo "[". $i.",".$j."] &nbsp;&nbsp;";
    }
    echo "<br>";
}
