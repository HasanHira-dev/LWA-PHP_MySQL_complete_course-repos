<?php
// time() current time stamp UTC

// Assuming today is March 10th, 2001, 5:16:18 pm, and that we are in the
// Mountain Standard Time (MST) Time Zone

// date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
// date("m.d.y");                         // 03.10.01
// date("j, n, Y");                       // 10, 3, 2001
// date("Ymd");                           // 20010310
// date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
// date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
// date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
// date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
// date("H:i:s");                         // 17:16:18
// date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (the MySQL DATETIME format)



###########################################// New
// date_default_timezone_set('Asia/Dhaka');

// echo date('Y m d | H:i:s A');  // 2025 05 05 | 08:33:36 AM (24hs) H - (24hs)
// echo date('Y M d | H:i:s A');  // 2025 May 05 | 08:33:36 AM (24hs) M/F - Full month's name 
// echo date('Y F j | H:i:s A');  // 2025 May 5 | 08:33:36 AM (24hs)  j - 0 less date
// echo date('Y F l | H:i:s A');  // 2025 May Monday | 08:33:36 AM (24hs)  l - day of the week
// echo date('Y F l | h:i:s A');  // 2025 May 5 | 08:33:36 AM (12hs)  h - 12hours time
// echo date('Y F jS | h:i:s A');  // 2025 May 5th | 08:40:52 AM (12hs)  jS - 5th formate for date
// echo date('Y m d | h:i:s A');  // 2025 05 05 | 08:33:36 AM (24hs)

// Example
// $d1 = '1980-05-13, 08:20:00';
// $ts1 = strtotime($d1);
// echo date('Y F jS, h:i:s a', $ts1);


# Example 2 - expaire token
// $formate = 'd-m-Y';
// $till_date = 7;
// $token = date($formate);
// $exp = date($formate, strtotime("+$till_date days", strtotime( $token)));
// echo $exp;

#############################################// New
// $timezone = new DateTimeZone('Asia/Dhaka');
// $date = new DateTime('now', $timezone);
// $dt = $date->format('jS F, Y  | h:i:s'); // 5th May, 2025 | 09:15:52
// echo $dt;


// Example  Birthdate to age
// $bod = '1980-05-13';
// $date = '2025-05-05';
// $timeStamp = strtotime($bod);
// $timeStamp2 = strtotime($date);
// $diff = ($timeStamp2 - $timeStamp)/(60*60*24); //60*60*24 = 86400 seconds in a day;
// echo $diff/(30*12);

// Example Next day
date_default_timezone_set('Asia/Dhaka');

$nextDayOfWeek = 'Thursday';
$calc = strtotime('next '.$nextDayOfWeek); // Note: use a SPACE after next
echo date('Y F d', $calc);