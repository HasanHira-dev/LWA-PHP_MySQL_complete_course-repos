<?php

// Serialize & Unserialize - for convert array to string to array
// $student_info = [
//     'first_name' => 'Hasanuzzaman',
//     'last_name'  => 'Hira',
//     'class'      => 'PHP Course',
//     'age'        => 45,
//     'mobile'     => 1922327879,
// ];

// $store = serialize( $student_info );
// echo $store;
// echo '<br>';
// $output_arr = unserialize( $store );
// echo '<pre>';
// print_r( $output_arr );
// echo '</pre>';

// Json - for convert array to string to object (true param to array)

// $my_young_son = [
//     'first_name' => 'Muhammad',
//     'last_name'  => 'Ibn Hasanuzzaman',
//     'class'      => 2,
//     'age'        => 8,
// ];

// $str_store = json_encode( $my_young_son );
// echo $str_store;

// $out_str = json_decode( $str_store );
// echo '<pre>';
// print_r( $out_str );
// echo '</pre>';

// $out_str_arr = json_decode( $str_store, true );
// echo '<pre>';
// print_r( $out_str_arr );
// echo '</pre>';

// Unset

// $my_young_son = [
//     'first_name' => 'Muhammad',
//     'last_name'  => 'Ibn Hasanuzzaman',
//     'class'      => 2,
//     'age'        => 8,
// ];

// unset($my_young_son['last_name']);

// echo '<pre>';
// print_r($my_young_son);
// echo '</pre>';

// Array Utility functions -------------------

######## array_walk($array, callback)

// $numbers = array(20, 12, 77, 6, 91, 4, 17);
// // array_walk($numbers, function($e){
// //     echo $e. " squre is ". $e*$e ."<br>";
// // });

// ######## array_map(callback, $array) - can store as a new array
// $new_arr = array_map(function($e){
//     return $e*2;
// }, $numbers);

// echo '<pre>';
// print_r($new_arr);
// echo '</pre>';

######## array_filter($array, callback) - can store as a new array with new changes

// $num = [1, 2, 3, 4, 5, 6];
// $new_num = array_filter( $num, function ( $e ) {
//     return $e % 2 != 0;
// } );
// echo '<pre>';
// print_r( array_values( $new_num ) );
// echo '</pre>';

// $persons = ['Hasan', 'Masud', 'Sharif', 'Himel', 'Zakaria', 'Masum'];
// $person = array_filter( $persons, function ( $p ) {
//     // if($p[0] == 'M'){
//     //     return $p;
//     // }

//     if ( strlen( $p ) >= 6 ) {
//         return $p;
//     }
// } );
// echo '<pre>';
// print_r( array_values( $person ) );
// echo '</pre>';

######## array_reduce($array, callback) - can store as a string with 2 param for compare, sum or anything

// $num = [1, 2, 3, 4, 5, 6];
// $total = array_reduce( $num, function ( $old, $new ) {
//     return $old + $new;
// } );

// echo $total;

// $numbers = array( 25, 19, 40, 88, 35, 97, 11, 3 );
// $max_val = array_reduce($numbers, function($old, $new){
//     if($old>$new){
//         $max = $old;
//     }else{
//         $max = $new;
//     }
//     return $max;
// });

// echo $max_val;

// Function
## Built In

######## User Defined

// function that can be use for as below;
/*

1
1 2
1 2 3
1 2 3 4

*/

// function pyramid($n){
//     for($i=1; $i<=$n; $i++){
//         for($j=1; $j <= $i; $j++ ){
//             echo $j. "&nbsp;&nbsp;";
//         }
//         echo "<br>";
//     }
// }
// pyramid(15);