<?php
// https://docs.google.com/document/d/1W3nsAsmDfCWHi4_j_xYeVNzBtTZpl4FMpX5v8JGnB3s/edit?tab=t.0

# ----------------- Task - 1 ----------------- #

echo "<h2>1. Print all even numbers from an array</h2>";
// output: Array: [11, 22, 35, 42, 59, 68]
/*

22  
42  
68

 */

$numbrs = array(11, 22, 35, 42, 59, 68);

for($i=0; $i<count($numbrs); $i++){
    if( $numbrs[$i] % 2 == 0 ){
        echo $numbrs[$i] . "<br>";
    }
}

echo "<br>";
echo "<br>";
// ============ Task 1 (end) ============



    // # ----------------- Task - 2 ----------------- #


echo "<h2>2. Print total number of characters in each city name</h2>";
// output: Array: ["Khulna", "Dhaka", "Chattogram"]

/*

Khulna: 6
Dhaka: 5
Chattogram: 10

*/

$cityes = array("Khulna", "Dhaka", "Chattogram");

for($i=0; $i<count($cityes); $i++){
    echo $cityes[$i]. ": " .strlen($cityes[$i]). "<br>";
}


echo "<br>";
echo "<br>";
// ============ Task 2 (end) ============



    // # ----------------- Task - 3 ----------------- #


echo "<h2>3. Print students who passed (marks >= 33)</h2>";

/*
Array: 
$students = [
    "Jamal" => 45,
    "Rina" => 22,
    "Suman" => 60,
    "Asha" => 29
];

Sample Output
Jamal: Passed  
Suman: Passed

*/

$students = [
    "Jamal" => 45,
    "Rina" => 22,
    "Suman" => 60,
    "Asha" => 29
];

foreach( $students  as $name => $marks ){
    if( $marks >=33 ){
        echo $name. ": Passed <br>";
    }
}

echo "<br>";
echo "<br>";
// ============ Task 3 (end) ============



    // # ----------------- Task - 4 ----------------- #


echo "<h2>4. Print country names in UPPERCASE</h2>";
// output: Array: ["Bangladesh", "India", "Nepal"]

/*

Sample Output:
BANGLADESH  
INDIA  
NEPAL

*/

$countries = array("Bangladesh", "India", "Nepal");
/*
for($i=0; $i<count($countries); $i++){
    echo strtoupper($countries[$i]). "<br>";
}
*/
// or
foreach($countries as $country){
    echo strtoupper($country). "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 4 (end) ============



    // # ----------------- Task - 5 ----------------- #


echo "<h2>5. Print sum of all ages</h2>";
// output: Array: [21, 33, 45, 18, 27]

/*

Sample Output:
Total: 144

*/
$ages = [21, 33, 45, 18, 27];

/* EX: 01
$total = 0;
for( $i = 0; $i<count($ages); $i++ ){
    $total += $ages[$i];
}
echo "Total : ". $total;
*/

// or, 

/* EX: 02
$total = 0;
foreach($ages as $age){
    $total += $age;
}
echo "Total : ". $total;
*/

// or, EX: 03

echo "Total : ". array_sum($ages);

echo "<br>";
echo "<br>";
// ============ Task 5 (end) ============



    // # ----------------- Task - 6 ----------------- #


echo "<h2>6. Print only names of students who scored above 80</h2>";
// output: Array: $marks = ["Nina"=>76, "Sumon"=>88, "Rafi"=>92, "Lina"=>65];


/*

Sample Output:
Sumon  
Rafi 

*/

$marks = array("Nina"=>76, "Sumon"=>88, "Rafi"=>92, "Lina"=>65);

foreach($marks as $name => $mark){
    if($mark>=80){
        echo $name. "<br>";
    }
}

echo "<br>";
echo "<br>";
// ============ Task 6 (end) ============



    // # ----------------- Task - 7 ----------------- #


echo "<h2>7. Count how many numbers are divisible by 5</h2>";
// output: Array: [10, 15, 18, 20, 33, 40];


/*

Sample Output:
Count: 4 

*/

$num = array(10, 15, 18, 20, 33, 40);
$count = [];
for($i=0; $i<count($num); $i++){
    if($num[$i] % 5 == 0){
        $count[] = $num[$i];
    }
}
// print_r($count);
echo "Count: ". count($count);

echo "<br>";
echo "<br>";
// ============ Task 7 (end) ============



    // # ----------------- Task - 8 ----------------- #


echo "<h2>8. Reverse an array using a loop</h2>";
// output: Array: [10, 20, 30, 40, 50]

/*

Sample Output:
50  
40  
30  
20  
10

*/

$numSer = [10, 20, 30, 40, 50];
$r_numSer = [];

for($i = (count($numSer)-1); $i>=0; $i--){
    $r_numSer[] = $numSer[$i];
}
// print_r($r_numSer);
for($i=0; $i<count($r_numSer); $i++){
    echo $r_numSer[$i]. "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 8 (end) ============



    // # ----------------- Task - 9 ----------------- #


echo "<h2>9. Print persons older than 30</h2>";

/*
Array:
$persons = [
    ["name"=>"Jamal", "age"=>29],
    ["name"=>"Tina", "age"=>33],
    ["name"=>"Robin", "age"=>41]
];

Sample Output:
Tina  
Robin

*/

$persons = [
    ["name"=>"Jamal", "age"=>29],
    ["name"=>"Tina", "age"=>33],
    ["name"=>"Robin", "age"=>41]
];
// $person = [];

foreach($persons as $person){
    if(($person["age"])>30){
        echo $person["name"]. "<br>";
    }
}

echo "<br>";
echo "<br>";
// ============ Task 9 (end) ============



    // # ----------------- Task - 10 ----------------- #


echo "<h2>10. Count total vowels in all city names</h2>";
// output: Array: ["Dhaka", "Rajshahi", "Barisal"]

/*

Sample Output:
Total Vowels: 8  

*/

$cities = ["Dhaka", "Rajshahi", "Barisal"];
$vowels = ["a", "e", "i", "o", "u"];

$city = strtolower(implode($cities));
$cityLetters = str_split($city);

// print_r($cityLetters);
$total = 0;
for($i=0; $i<count($cityLetters); $i++){
    if(in_array($cityLetters[$i], $vowels)){
        // $total += 1;
        $total++;
    }
}
echo "Total Vowels: " .$total;


echo "<br>";
echo "<br>";
// ============ Task 10 (end) ============


    // # ----------------- Task - 11 ----------------- #


echo "<h2>11. Print only odd numbers and their square</h2>";
// output: Array: [3, 6, 7, 10, 13]

/*

Sample Output:
3: 9  
7: 49  
13: 169

*/
$sort = array(3, 6, 7, 10, 13);

for($i=0; $i<count($sort); $i++){
    if(($sort[$i]) % 2 != 0){
        echo $sort[$i]. ": " .($sort[$i]*$sort[$i]). "<br>";
    }
}

echo "<br>";
echo "<br>";
// ============ Task 11 (end) ============


    // # ----------------- Task - 12 ----------------- #


echo "<h2>12. Show each student’s name with length of name</h2>";
// output: Array: ["Hasan", "Tania", "Rifat"]

/*

Sample Output:
Hasan: 5  
Tania: 5  
Rifat: 5  

*/

$names = array("Hasan", "Tania", "Rifat");
$name_len = "";

for($i=0; $i<count($names); $i++){
    $name_len = $names[$i];
    echo $names[$i]. ": " .strlen($name_len). "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 12 (end) ============


    // # ----------------- Task - 13 ----------------- #


echo "<h2>13. Print each letter of every name</h2>";
// output: Array: ["Ali", "Sara"]

/*

Sample Output:
A  
l  
i  
S  
a  
r  
a  

*/

$letter_name = ["Ali", "Sara"];
$nam_str = implode('', $letter_name);
// echo $nam_str;
$letters = str_split($nam_str);

// print_r($letters);

for($i=0; $i<count($letters); $i++){
    echo $letters[$i]. "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 13 (end) ============


    // # ----------------- Task - 14 ----------------- #


echo "<h2>14. Print first letters of each word in array</h2>";
// output: Array: ["Green", "Red", "Yellow"]

/*

Sample Output:
G  
R  
Y  

*/

$colors = ["Green", "Red", "Yellow"];
foreach($colors as $color){
    echo substr($color, "0", "1"). "<br>";
}

echo "<br>";
echo "<br>";
// ============ Task 14 (end) ============


    // # ----------------- Task - 15 ----------------- #


echo "<h2>15. Check if a name exists in an array</h2>";
// output: Array: ["Sabbir", "Mahi", "Rifat"]

/*

Sample Output:
Found  

*/

$search = ["Sabbir", "Mahi", "Rifat"];
echo in_array("Mahi", $search) ? "Found" : "Not Found";
