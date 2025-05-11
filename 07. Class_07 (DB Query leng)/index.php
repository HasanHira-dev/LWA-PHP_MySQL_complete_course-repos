<?php
$dbhost = 'localhost';
$dbname = 'php_b1';
$dbuser = 'root';
$dbpass = '12345678';
try {
    $pdo = new PDO("mysql:host={$dbhost};dbname={$dbname}", $dbuser, $dbpass);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch( PDOException $e ) {
    echo "Connection error :" . $e->getMessage();
}


// ✅ PDO::FETCH_ASSOC
// Retrieves data from a database query as an associative array

// $stmt = $pdo->prepare("SELECT name,email FROM students");
// $stmt->execute();
// $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ PDO::FETCH_NUM
// Retrieves data from a database query as a numeric array

// $statement = $pdo->prepare("SELECT name,email FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_NUM);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ PDO::FETCH_COLUMN
// Get plain one-dimensional array.
// First column (from select items first one) will be fetched

// $statement = $pdo->prepare("SELECT name,email FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_COLUMN);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ PDO::FETCH_GROUP
// This mode groups the returned rows into a nested array, where indexes will be unique values from the first column, and values will be arrays similar to ones returned by regular fetchAll().

// $statement = $pdo->prepare("SELECT city,email FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_GROUP);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ PDO::FETCH_GROUP | PDO::FETCH_COLUMN
// This one groups the first column with all values from the second column.

// $statement = $pdo->prepare("SELECT city,name FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_GROUP | PDO::FETCH_COLUMN);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ PDO::FETCH_BOTH
// Retrieves data from a database query as an associative array and a numeric array

// $statement = $pdo->prepare("SELECT name,city FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_BOTH);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ Distinct Statement
// It is used to return only distinct (different) values

// $statement = $pdo->prepare("SELECT distinct(city) FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_NUM);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ MIN() and MAX () Functions
// SELECT MIN returns the smallest value for a column.
// SELECT MAX returns the largest value for a column.

// $statement = $pdo->prepare("SELECT MIN(age) as 'Younger Person' FROM students");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ COUNT() - Aggregate Functions
// Returns a count of the number of data values.

// 👉 Example - Total number of students in the table
// $statement = $pdo->prepare("SELECT COUNT(id) as 'Total Students' FROM students");
// $statement->execute();
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo $result['Total Students'];



// ✅ SUM() - Aggregate Functions
// Returns the sum of the data values.

// 👉 Example - Summation of ages of students who live in Khulna City
// $statement = $pdo->prepare("SELECT SUM(age) as 'Sum of Ages' FROM students WHERE city=?");
// $statement->execute(['Dhaka']);
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo $result['Sum of Ages'];



// ✅ AVG() - Aggregate Functions
// Returns the average of the data values.

// 👉 Example - Average of ages of students who live in Khulna City
// $statement = $pdo->prepare("SELECT AVG(age) as 'Average Age' FROM students WHERE city=?");
// $statement->execute(['Khulna']);
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo $result['Average Age'];



// ✅ WHERE Clause
// SELECT column_name(s) FROM table_name WHERE column_name operator value

// 👉 Example
// $statement = $pdo->prepare("SELECT * FROM students WHERE first_name=?");
// $statement->execute(['Patrick']);
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";


// 👉 More Examples:

// $statement = $pdo->prepare("SELECT first_name,email FROM students WHERE age > ?");
// $statement->execute([25]);
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $statement = $pdo->prepare("SELECT first_name,age FROM students WHERE first_name = ? AND city = ?");
// $statement->execute(['Emily','Dhaka']);
// $result = $statement->fetch(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $statement = $pdo->prepare("SELECT first_name,age FROM students WHERE first_name = ? OR city = ?");
// $statement->execute(['Patrick','Khulna']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $statement = $pdo->prepare("SELECT first_name,last_name,age FROM students WHERE last_name=? AND (first_name=? OR first_name=?)");
// $statement->execute(['Johnson','Smith','Emily']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";

// $statement = $pdo->prepare("SELECT * FROM students WHERE (firstname=? OR firstname=?) AND (lastname=? OR lastname=?"));
// $statement->execute(['Smith', 'Peter','Johnson','Brent']);




// ✅ Operators in The WHERE Clause
/*
= (Equal)
> (Greater than)
< (Less than)
>= (Greater than or equal)
<= (Less than or equal)
<> (Not equal)
BETWEEN (Between a certain range)
LIKE (Search for a pattern)
IN (To specific multiple possible values for a column)
*/



// ✅ WHERE BETWEEN
// $statement = $pdo->prepare("SELECT first_name,age FROM students WHERE age BETWEEN ? AND ?");
// $statement->execute([22,35]);
// $result = $statement->fetchAll(PDO::FETCH_NUM);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ WHERE LIKE
// $statement = $pdo->prepare("SELECT first_name FROM students WHERE city LIKE ?");
// $statement->execute(['d%']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ WHERE IN
// List all the students from Dhaka or Chittagong

// $statement = $pdo->prepare("SELECT first_name,city FROM students WHERE city IN (?,?)");
// $statement->execute(['Dhaka','Rajshahi']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ WHERE NOT IN
// List all students who are not in Dhaka or Khulna.

// $statement = $pdo->prepare("SELECT first_name,city FROM students WHERE city NOT IN (?,?)");
// $statement->execute(['Dhaka','Khulna']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ WHERE IN Subquery
// List all students that are from the same cities as where the institutes are.

// $statement = $pdo->prepare("SELECT first_name,city
//     FROM students
//     WHERE city IN (
//         SELECT institute_city FROM institutes
//     )
// ");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ Update Data

/*
$q = $pdo->prepare("UPDATE students SET city=? WHERE id=?");
$q->execute(['Khulna',7]);
*/

/*
$q = $pdo->prepare("UPDATE students SET email=?,phone=? WHERE id=?");
$q->execute(['smith@gmail.com','123',6]);
*/



// ✅ Delete Particular Data
/*
$statement = $pdo->prepare("DELETE FROM students WHERE city=?");
$statement->execute(['Khulna']);
*/



// ✅ Delete All Data
// TRUNCATE is faster than DELETE because it removes the data by deallocating the data pages instead of deleting the rows one by one.
// BE CAREFUL: If you use TRUNCATE, you can not undo it.

/*
TRUNCATE TABLE table_name;
Or
DELETE FROM table_name;
*/


// ✅ Delete Table
/*
DROP TABLE table_name;
*/



// ✅ ORDER BY Clause

// $statement = $pdo->prepare("SELECT first_name,age,city FROM students WHERE age > ? ORDER BY city DESC");
// $statement->execute([30]);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ LIMIT Clause

// $statement = $pdo->prepare("SELECT first_name FROM students LIMIT 3");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ OFFSET

// $statement = $pdo->prepare("SELECT first_name FROM students LIMIT 3 OFFSET 2");
// $statement = $pdo->prepare("SELECT first_name FROM students LIMIT 2, 3"); // This is same as the previous line
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";



// ✅ JOIN
// A JOIN clause is used to combine rows from two or more tables, based on a related column between them.


// ✅ Inner Join:
// Returns records that have matching values in both tables
// $statement = $pdo->prepare("SELECT
//             s.id,
//             s.department_id,
//             s.name as s_name,
//             s.city,
//             d.name as d_name
//             FROM students s
//             INNER JOIN departments d
//             ON s.department_id = d.id");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['s_name'] . " - " . $row['city'] . " - " . $row['d_name'] . "<br>";
// }


// ✅ Left (outer) Join:
// Returns all records from the left table, and the matched records from the right table
// $statement = $pdo->prepare("SELECT
//             s.id as sid,
//             s.department_id,
//             s.name as s_name,
//             s.city,
//             d.name as d_name
//             FROM students s
//             LEFT JOIN departments d
//             ON s.department_id = d.id");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['s_name'] . " - " . $row['city'] . " - " . $row['d_name'] . "<br>";
// }


// ✅ Right (outer) Join:
// Returns all records from the right table, and the matched records from the left table
// $statement = $pdo->prepare("SELECT
//             s.id as sid,
//             s.department_id,
//             s.name as s_name,
//             s.city,
//             d.name as d_name
//             FROM students s
//             RIGHT JOIN departments d
//             ON s.department_id = d.id");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['s_name'] . " - " . $row['city'] . " - " . $row['d_name'] . "<br>";
// }


// ✅ Full (outer) Join:
// Returns all records when there is a match in either left or right table
// $statement = $pdo->prepare("SELECT
//             s.id as sid, s.department_id, s.name as s_name, s.city, d.name as d_name
//             FROM students s
//             LEFT JOIN departments d
//             ON s.department_id = d.id

//             UNION

//             SELECT
//             s.id as sid, s.department_id, s.name as s_name, s.city, d.name as d_name
//             FROM students s
//             RIGHT JOIN departments d
//             ON s.department_id = d.id");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['s_name'] . " - " . $row['city'] . " - " . $row['d_name'] . "<br>";
// }





// ✅ UNION / UNION ALL Clause

// It is used to combine the results of two or more SELECT statements into a single result set.
// The SELECT statements must have the same number of columns and the data types of the columns must be compatible.
// UNION returns only unique rows.
// UNION ALL allows duplicate rows to be present.


// 👉 Example - Single Table
// $statement = $pdo->prepare("
//             SELECT * FROM students WHERE city=?
//             UNION
//             SELECT * FROM students WHERE city=?
// ");
// $statement->execute(['Dhaka','Dhaka']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['name'] . " - " . $row['city'] . " - " . $row['age'] . "<br>";
// }

// 👉 Example - 2 Tables
// $statement = $pdo->prepare("
//             SELECT * FROM students WHERE city=?
//             UNION ALL
//             SELECT * FROM teachers WHERE city=?
// ");
// $statement->execute(['Khulna','Khulna']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['name'] . " - " . $row['city'] . " - " . $row['age'] . "<br>";
// }


// 👉 Example - 2 Tables

// $statement = $pdo->prepare("
//             SELECT city FROM students
//             UNION
//             SELECT city FROM teachers
// ");
// $statement->execute();
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['city'] . "<br>";
// }



// ✅ ALTER Table
// ALTER statement is used to add, delete, or modify columns in an existing table


// ✅ Add Column
/*
ALTER TABLE students
ADD country varchar(255);
*/


// ✅ DROP Column
/*
ALTER TABLE students
DROP COLUMN country;
*/


// ✅ RENAME Column
/*
ALTER TABLE students
RENAME COLUMN country to location;
*/


// ✅ MODIFY Datatype
/*
ALTER TABLE students
MODIFY COLUMN country text;
*/



// ✅ GROUP BY Clause
// It is used to group rows with the same values into summary rows.
// It is often used with aggregate functions (COUNT(), MAX(), MIN(), SUM(), AVG()) to group the result-set by one or more columns
// Always include the columns you're grouping by in your SELECT clause
// You can group by multiple columns (separated by commas)
// Any column in SELECT that's not in an aggregate function should be in the GROUP BY clause
// GROUP BY is processed after WHERE but before HAVING, ORDER BY, and LIMIT


// ✅ Usage
/*
SELECT column1, SUM(column2), AVG(column3), ...
FROM table_name
GROUP BY column1;
*/

// 👉 Example 1
// $q = $pdo->prepare("
//         SELECT 
//             name, 
//             SUM(salary) 
//         AS 
//             'Total Paid' 
//         FROM 
//             employees 
//         GROUP BY 
//             name
// ");
// $q->execute();
// $result = $q->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['name'] . " - " . $row['Total Paid'] . "<br>";
// }

// 👉 Example 2
// $q = $pdo->prepare("
//         SELECT 
//             p.id,
//             p.name,
//             SUM(o.quantity) as total_quantity,
//             SUM(o.quantity * p.price) as total_revenue
//         FROM 
//             orders o
//         JOIN 
//             products p ON o.product_id = p.id
//         GROUP BY 
//             p.id, p.name
//         ORDER BY 
//             total_revenue DESC
// ");
// $q->execute();
// $result = $q->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['name'] . " - " . $row['total_quantity'] . " - " . $row['total_revenue'] . "<br>";
// }

// 👉 Example 3
// $q = $pdo->prepare("
//         SELECT 
//             o.order_date,
//             SUM(o.quantity) as total_quantity,
//             SUM(o.quantity * p.price) as total_revenue
//         FROM 
//             orders o
//         JOIN 
//             products p ON o.product_id = p.id
//         GROUP BY 
//             o.order_date
//         ORDER BY 
//             o.order_date DESC
// ");
// $q->execute();
// $result = $q->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['order_date'] . " - " . $row['total_quantity'] . " - " . $row['total_revenue'] . "<br>";
// }




// ✅ HAVING Clause
// It is used to filter group results that were aggregated using the "GROUP BY" clause.
// It allows you to specify conditions for the groups, rather than for individual rows.

// ✅ Usage
/*
SELECT column1, SUM(column2)
FROM table_name
GROUP BY column1
HAVING SUM(column2) > 100;
*/

// 👉 Example
// QUESTION: What is the total paid salary, along with the names of employees, who have received more than $2500 in total salary?

// $q = $pdo->prepare("
//         SELECT 
//             name, 
//             SUM(salary) AS 'Total Paid'
//         FROM 
//             employees
//         GROUP BY 
//             name
//         HAVING 
//             SUM(salary) > 10000
// ");
// $q->execute();
// $result = $q->fetchAll(PDO::FETCH_ASSOC);
// foreach($result as $row) {
//     echo $row['name'] . " - " . $row['Total Paid'] . "<br>";
// }




// ✅ GROUP BY with JOIN
// GROUP BY can be used in combination with the "JOIN" clause to aggregate data from multiple tables. 

// ✅ Usage
/*
SELECT t1.column1, SUM(t2.column2)
FROM table1 t1
JOIN table2 t2
ON t1.id = t2.id
GROUP BY t1.column1;
*/

// 👉 Example
// QUESTION: Retrieve information about employees' total paid salary and their respective department names, but only for those employees whose total paid salary is greater than $2500.
/*
$statement = $pdo->prepare("SELECT e.name, SUM(e.salary) AS 'Total Paid', d.department_name
                    FROM employees e
                    INNER JOIN departments d
                    ON e.department_id = d.id
                    GROUP BY e.name, d.department_name
                    HAVING SUM(e.salary) > 2500");
$statement->execute();
$result = $statement->fetchAll(PDO::FETCH_ASSOC);
*/

// $a = 10;
// $b = 20;
// if(($a == 10 || $a == 30) || ($b == 10 || $b == 15)) {
//     echo "True";
// } else {
//     echo "False";
// }



// $statement = $pdo->prepare("SELECT name FROM students WHERE name LIKE ?");
// $statement->execute(['%John%']);
// $result = $statement->fetchAll(PDO::FETCH_ASSOC);
// echo "<pre>";
// print_r($result);
// echo "</pre>";





// Students
// id, first_name, last_name, date_of_birth, email, phone, permanent_address, present_address, city, country, father_name, mother_name, father_mobile, mother_mobile, father_occupation, mother_occupation, father_income, mother_income


// Relation: 
// One-to-one
// One-to-many
// Many-to-many



// One-to-one

// Table: students
// id, first_name, last_name, email, phone

// Table: student_address
// id, student_id, permanent_address, present_address, city, country

// Table: student_guardian 
// id, student_id, father_name, mother_name, father_mobile, mother_mobile, father_occupation, mother_occupation, father_income, mother_income



// One to many

// Table: departments
// id, name

// Table: students
// id, department_id, name



// Many to Many

// Table: students
// id, name, email

// Table: courses
// id, name, price

// Table: course_students = pivot table 
// id, course_id, student_id


