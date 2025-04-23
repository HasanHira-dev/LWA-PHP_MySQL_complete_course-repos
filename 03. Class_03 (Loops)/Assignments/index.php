<?php
    # ----------------- Task - 1 ----------------- #

    echo "<h2>1. Print even numbers from 2 to 20</h2>";
    // Output: 2 4 6 8 10 12 14 16 18 20

for($i=1; $i<=20; $i++){
    if($i%2 == 1){
        continue;
    }
    echo $i ." ";
}

echo "<br>";
echo "<br>";
// ============ Task 1 (end) ============



    # ----------------- Task - 2 ----------------- #

    echo "<h2>2. Print numbers in reverse from 10 to 1</h2>";
    // Output: 10 9 8 7 6 5 4 3 2 1

for($i=10; $i>=1; $i--){
        echo $i . " ";
    }

echo "<br>";
echo "<br>";
// ============ Task 2 (end) ============



    # ----------------- Task - 3 ----------------- #

    echo "<h2>3. Print multiples of 5 up to 50</h2>";
    // Output: 5 10 15 20 25 30 35 40 45 50

$n = 5;
for($i=1; $i<=10; $i++){
    echo $n*$i . " ";
}

echo "<br>";
echo "<br>";
// ============ Task 3 (end) ============



    # ----------------- Task - 4 ----------------- #

    echo "<h2>4. Print squares of numbers from 1 to 10</h2>";
    // Output: 1 4 9 16 25 36 49 64 81 100

for($i=1; $i<=10; $i++){
    echo $i*$i . " ";
}

echo "<br>";
echo "<br>";
// ============ Task 4 (end) ============



    # ----------------- Task - 5 ----------------- #

    echo "<h2>5. Print numbers from 1 to 10 with a dash</h2>";
    // Output: 1-2-3-4-5-6-7-8-9-10

for($i=1; $i<=10; $i++){
    echo $i . "-";
}

echo "<br>";
echo "<br>";
// ============ Task 5 (end) ============



    # ----------------- Task - 6 ----------------- #

    echo "<h2>6. Print multiplication table of 2</h2>";

$q = 2;
for($i=1; $i<=10; $i++){
    echo $q ." x ". $i ." = ". $q*$i ."<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 6 (end) ============



    # ----------------- Task - 7 ----------------- #

    echo "<h2>7. Print all numbers between 1 and 100 that are divisible by 10</h2>";
    // Output: 10 20 30 40 50 60 70 80 90 100

for($i=1; $i<=100; $i++){
    if($i%10!=0){
        continue;
    }
    echo $i ." ";
}

echo "<br>";
echo "<br>";
// ============ Task 7 (end) ============



    # ----------------- Task - 8 ----------------- #

    echo "<h2>8. Print number and its double from 1 to 5</h2>";
    // Output: 10 20 30 40 50 60 70 80 90 100

for($i=1; $i<=5; $i++){
    echo $i ." -> ". $i + $i ."<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 8 (end) ============



    # ----------------- Task - 9 ----------------- #

    echo "<h2>9. Print number and whether it's even or odd (1-5)</h2>";
    // 1 - Odd

for($i=1; $i<=5; $i++)
{
    if($i%2!=0){
        echo $i . " - Odd<br>";
    } else {
        echo $i . " - Even<br>";
    } 
}

echo "<br>";
echo "<br>";
// ============ Task 9 (end) ============



    # ----------------- Task - 10 ----------------- #

    echo "<h2>10. Print the reverse of multiples of 3 till 30</h2>";
    // Output:30 27 24 21 18 15 12 9 6 3

for($i=10; $i>=1; $i--){
    echo $i * 3 . " ";
}

echo "<br>";
echo "<br>";
// ============ Task 10 (end) ============



    # ----------------- Task - 11 ----------------- #

    echo "<h2>11. Print Hello with line number (5 times)</h2>";
    // Output: 1. Hello

$greeting = "Hello";
for($i=1; $i<=5; $i++){
    echo $i . ". ". $greeting . "<br>"; 
}

echo "<br>";
echo "<br>";
// ============ Task 11 (end) ============



    # ----------------- Task - 12 ----------------- #

    echo "<h2>12. Print years from 2010 to 2020</h2>";
    // Output: 2010 2011 2012 ... 2020

for($i=2010; $i<=2020; $i++){
    echo $i . " ";
}
/*
echo "<br>";
$years = 2000;
for($i=10; $i<=20; $i++){
    echo $years + $i . " ";
}
    */
