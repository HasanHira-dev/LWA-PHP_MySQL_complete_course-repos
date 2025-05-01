<?php


// ✅ Associative Array to String - 2 Ways
// 1. Serialize
// 2. JSON - better


// ✅ Serialize

//$studentInfo = [
//    'firstName' => 'Smith',
//    'lastName' => 'Cooper',
//    'class' => 9,
//    'age' => 35
//];
//echo serialize($studentInfo);
//Output:
//a:4:{s:9:"firstName";s:9:"Smith";s:8:"lastName";s:6:"Cooper";s:5:"class";i:9;s:3:"age";i:35;}

// ✅ Unserialize

//$data = 'a:4:{s:9:"firstName";s:9:"Smith";s:8:"lastName";s:6:"Cooper";s:5:"class";i:9;s:3:"age";i:35;}';
//print_r(unserialize($data));


// ✅ JSON Encode

//$studentInfo = [
//    'firstName' => 'Smith',
//    'lastName' => 'Cooper',
//    'class' => 9,
//    'age' => 35
//];
//echo json_encode($studentInfo);
//Output:
//{"firstName":"Smith","lastName":"Cooper","class":9,"age":35}


// ✅ JSON Decode - Return stdClass object

//$data = '{"firstName":"Smith","lastName":"Cooper","class":9,"age":35}';
//$result = json_decode($data);
//echo $result->firstName; // Smith
//print_r($result);
//Output:
//stdClass Object
//(
//    [firstName] => Smith
//    [lastName] => Cooper
//    [class] => 9
//    [age] => 35
//)

// ✅ JSON Decode - Return Array Again

//$data = '{"firstName":"Smith","lastName":"Cooper","class":9,"age":35}';
//$result = json_decode($data,true);
//echo $result['firstName']; // Smith
//print_r($result);
//Output:
//Array
//(
//    [firstName] => Smith
//    [lastName] => Cooper
//    [class] => 9
//    [age] => 35
//)








// ✅ Array Utility Function - array_walk(array,callback)

// But it will not return. It will directly print values.

//$numbers = [1,2,3,4,5];
//array_walk($numbers,function($n) {
//    printf("Square of %d is %d", $n, $n*$n);
//});

//Output:
//Square of 1 is 1
//Square of 2 is 4
//Square of 3 is 9
//Square of 4 is 16
//Square of 5 is 25


// ✅ Array Utility Function - array_map(callback,array)

// Works like array_walk(). But difference is: it can return values.
// Arguments position is opposite to array_walk
// It is used to get a new array

//$numbers = [1,2,3,4,5];
//$newArray = array_map(function($n){
//    return $n*$n;
//},$numbers);
//print_r($numbers);
//print_r($newArray);

//Output:
//Array
//(
//    [0] => 1
//    [1] => 2
//    [2] => 3
//    [3] => 4
//    [4] => 5
//)
//Array
//(
//    [0] => 1
//    [1] => 4
//    [2] => 9
//    [3] => 16
//    [4] => 25
//)


// ✅ Array Utility Function - array_filter(array,callback)

// It will check each elements and return values based on condition

//$numbers = [1,2,3,4,5];
//$newArray = array_filter($numbers,function($n) {
//    return $n%2==0;
//});
//print_r($newArray);

//Output:
//Array
//(
//    [1] => 2
//    [3] => 4
//)


// 👉 Example - From an array of students find all the students whose name starts with the letter 's'

//$students = ['abir','sohan','sohag','robin','sagir','rubel','jaber','salim'];
//$newStudentList = array_filter($students,function($n) {
//    if($n[0] == 's') {
//        return $n;
//    }
//});
//print_r($newStudentList);

//Output:
//Array
//(
//    [1] => sohan
//    [2] => sohag
//    [4] => sagir
//    [7] => salim
//)




// ✅ Array Utility Function - array_reduce(array,callback)

// 👉 Example - Sum of array elements

//$numbers = [1,2,3,4,5,6,7,8,9];
//$total = array_reduce($numbers, function($old,$new) {
//    return $old+$new;
//});
//echo $total; // 45


// 👉 Example - Sum of array elements that are even

//$numbers = [1,2,3,4,5,6,7,8,9];
//$total = array_reduce($numbers, function($old,$new) {
//    if($new % 2 == 0) {
//        return $old+$new;
//    } else {
//        return $old;
//    }
//});
//echo $total; // 20


// 👉 Example - Get maximum value from an array

//$numbers = [33, 44, 88, 22, 18, 36];
//$result = array_reduce($numbers, function($old,$new) {
//    if($new>$old) {
//        $max = $new;
//    } else {
//        $max = $old;
//    }
//    return $max;
//});
//echo $result; // 88







// ✅ Function
// 1. User-defined
// 2. Built-in

// Ref: https://www.php.net/manual/en/funcref.php



// 👉 Example - No parameter - print into body
//function country() {
//    echo "Bangladesh";
//}
//country();


// 👉 Example - No parameter - print outside
//function country() {
//    return "Bangladesh";
//}
//echo country();


// 👉 Example - with Single Parameter - print into body
//function show($name) {
//    echo $name;
//}
//show("Smith");


// 👉 Example - with Single Parameter - print outside
//function show($name) {
//    return $name;
//}
//echo show("Smith");


// 👉 Example - with Multiple Parameters
//function add($a, $b) {
//    return ($a+$b);
//}
//echo add(10,20); // 30
//echo add(50,10); // 60
//echo add(100,200); // 300


// 👉 Example - Default Parameter Values
//function add($a = 0, $b = 0, $c = 0) {
//    return ($a+$b+$c);
//}
//echo add(10,20); // 30


// 👉 Example - Practical
//function pyramid($number) {
//    for($i=1;$i<=$number;$i++) {
//        for($j=1;$j<=$i;$j++) {
//            echo $j." ";
//        }
//        echo "\n";
//    }
//}
//pyramid(3);
//pyramid(7);
//pyramid(9);



// ✅ Superglobals

// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and you can access them from any function, class or file without having to do anything special.

/*
$GLOBALS
$_SERVER
$_REQUEST
$_POST
$_GET
$_FILES
$_ENV
$_COOKIE
$_SESSION
*/

// 👉 $GLOBALS
// Built-in variables that are always available in all scopes

// 👉 $_SERVER
// An associative array containing information such as headers, paths, and script locations.

// 👉 $_REQUEST
// An associative array that by default contains the contents of $_GET, $_POST, and $_COOKIE.

// 👉 $_POST
// An associative array of variables passed to the current script via the HTTP POST method.

// 👉 $_GET
// An associative array of variables passed to the current script via the URL parameters.

// 👉 $_FILES
// An associative array of items uploaded to the current script via the HTTP POST method.

// 👉 $_ENV
// An associative array of variables passed to the current script via the environment method.

// 👉 $_COOKIE
// An associative array of variables passed to the current script via HTTP Cookies.

// 👉 $_SESSION
// An associative array containing session variables available to the current script.





// ✅ Include and Require

//include()
//include_once()
//require()
//require_once()

// All are used to include a file in another file. The main difference between them is how they handle errors and whether the file is included multiple times.


// 👉 include:
// If the file is not found, a warning is generated, but the script continues to execute. The file can be included multiple times.

// 👉 include_once:
// If the file has already been included, it will not be included again. If the file is not found, a warning is generated, but the script continues to execute.

// 👉 require:
// If the file is not found, a fatal error is generated and the script stops executing. The file can be included multiple times.

// 👉 require_once:
// If the file has already been included, it will not be included again. If the file is not found, a fatal error is generated and the script stops executing.



// ✅ Important

// I am giving an Example to understand. For example, I am going to use include and require to my home page.
// I will use "include" in order to include some less important parts like testimonial, blog etc. into the home page. Because if any section has error, the complete page will not be into trouble to load. Only that particular section will have issue.
// I will use "require" in order to include the important parts like header, footer, navigation etc.



// ✅ File Upload

// $path = $_FILES['my_file']['name'];
// $path_tmp = $_FILES['my_file']['tmp_name'];

// $size = $_FILES['my_file']['size']/1024/1024;
// $data = getimagesize($path_tmp);
// $width = $data[0];
// $height = $data[1];
// $new_width = ceil($width/4);
// $new_height = ceil($height/4);

// $extension = pathinfo($path, PATHINFO_EXTENSION);
// $filename = time().".".$extension;

// $finfo = finfo_open(FILEINFO_MIME_TYPE);
// $mime = finfo_file($finfo, $path_tmp);

// if($mime == 'image/jpeg' || $mime == 'image/png' || $mime == 'application/pdf') {
//     copy($path_tmp, 'uploads/'.$filename);
//     move_uploaded_file($path_tmp, 'uploads1/'.$filename);

//     $filename_small = time()."-small.".$extension;
//     $destination = 'uploads/'.$filename_small;
// }



// ✅ File Delete

// unlink('uploads/1674955499-small.jpg');



// ✅ Try-Catch
//try {
//    throw new Exception("Error Message");
//} catch(Exception $e) {
//    $e->getMessage();
//}

// 👉 Example - File Upload using Try Catch
// if(isset($_POST['form1'])) 
// {
//     $path = $_FILES['my_file']['name'];
//     $path_tmp = $_FILES['my_file']['tmp_name'];
//     echo $_FILES['my_file']['size']/1024;

//     try {

//         if($path == '') {
//             throw new Exception('You must have to select a file');
//         }

//         if($_FILES['my_file']['size']/1024 > 100) {
//             throw new Exception('Size must be within 100 kb');
//         }

//         $extension = pathinfo($path, PATHINFO_EXTENSION);
//         echo $extension;
//         $filename = 'user_'.time().".".$extension;
//         $finfo = finfo_open(FILEINFO_MIME_TYPE);
//         $mime = finfo_file($finfo, $path_tmp);
//         echo $mime;
//         if($mime != 'image/jpeg' && $mime != 'image/png' && $mime != 'application/zip') {
//             throw new Exception('Invalid File Type');
//         }

//         move_uploaded_file($path_tmp, 'files/'.$filename);
//         echo 'Successful';

//     } catch(Exception $e) {
//         echo $e->getMessage();
//     }
// }