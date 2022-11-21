<?php
// **************************** 1 ****************************
// •	Write a PHP script which will display numbers from 1 to 100 in h2 

/*for ($i = 0; $i <= 100; $i++) {
    echo "<h2> -- $i </h2>";
}*/

//======================================================================
// **************************** 2 ****************************
// •	Type even numbers from 1 to 100 in paragraph using while 

// if start $a: From Zero 

/*$a = 0;
while ($a < 100) {

    echo "<p> -- $a </p>";
    $a += 2;
}*/

// if start $a: From 1

/*$a = 1;
while (($a <= 100)) {
    if ($a % 2 == 0) {
        echo "<p>" . $a . "</p>";
    }
    ++$a;
}*/

//======================================================================
// **************************** 3 ****************************
// •	Write php script witch will print odd numbers from 1 to 50 in span

// $x = 1;
// do {
//     echo "<span>" . $x . "</span>";
//     $x += 2;
// } while ($x <= 50);

//======================================================================
// **************************** 4 ****************************
// •	Write php script that print all chars from this string 

$string = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Eligendi, aperiam.";

// for ($i = 0; $i <=  strlen($string); $i++) {
//     echo substr($string, $i, 1) . "\n";
// }

// for ($i = 0; $i < strlen($string); ++$i) {
//     echo $string[$i];
// }

//======================================================================
// **************************** 5 ****************************
//•	Write php script to print numbers that accept division by 5 in h3 
// for ($i = 0; $i < 100; $i++) {

//     if ($i % 5 == 0) {
//         echo $i . " - ";
//     }
// }

//======================================================================
// Create a script that displays 1-2-3-4-5-6-7-8-9-10 on one line. There will be no hyphen(-) at starting and ending position.
// **************************** 6 ****************************

// for ($i = 1; $i <= 10; $i++) {
//     if ($i < 10) {
//         echo $i . " - ";
//     } else {
//         echo $i;
//     }
// }

//======================================================================
// •	Write php script to get the submission for the numbers between 1 and 20 
// **************************** 7 ****************************

// for ($i = 1; $i <= 20; $i++) {


//     echo $sum;
// }

//======================================================================
// •	Write php script to display numbers between 1 and 50 and 
// **************************** 8 ****************************

// $number = 1;
// while ($number < 50) {
//     $count = 0;
//     for ($i = 1; $i <= $number; $i++) {
//         if ($number % $i == 0) {
//             $count++;
//         }
//     }
//     if ($count < 3) {
//         if ($number % 2 == 0) {
//             echo " * This Number is Prime & Even : " .  $number . " , ";
//         } else {
//             echo " * This Number is Prime & Odd : " .  $number . " , ";
//         }
//         echo "<br>";
//     } else {
//         if ($number % 2 == 1) {
//             echo " ** This Number is odd : " . $number . "<br>";
//         } else {
//             echo " *** This Number is Even : " . $number . "<br>";
//         }
//     }
//     $number++;
// }

//======================================================================
//•	Write a php script to display a square 10 * 10 ( from 1 to 100 )
// **************************** 9 ****************************

// $num = 1;
// $square = 1;
// while ($num <= 100) {
//     $square = $num * $num;
//     echo " - " . $num . " => " . $square . "<br>";
//     $num++;
// }

//======================================================================
// •	Draw a tringle from (#) using for loop
// **************************** 10 ****************************

// for ($i = 1; $i <= 10; $i++) {
//     for ($x = 0; $x < $i; $x++) {
//         echo "#";
//     }
//     echo "<br>";
// }

//======================================================================
//•	Display the previous string   
// **************************** 11 ****************************

// $numbers = "12-23-34-45";

// echo $numbers;

