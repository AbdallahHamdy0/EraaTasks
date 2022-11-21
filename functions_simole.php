<?php
// ** Abdallah Hamdy Hammad ** 
//=======================================================================
// Write a PHP function return any integer number plus 5
// **************************** 1 ****************************

// function addfive($n)
// {
//     return $n + 5;
// }
// echo addfive(30);
//=======================================================================
// **************************** 2 ****************************
//Write a php function to check if the string is greater than fixed number or not
//o Function take two parameters ( string , number )

// function check($name, $num)
// {
//     if (strlen($name) > $num) {
//         echo "The String is Too Long";
//     } else {
//         echo "It's Good";
//     }
// }

// check("Abdallah", 5);
//=======================================================================
// **************************** 3 ****************************
// Write a php function to check if the number is even or odd

// function evenodd($n)
// {
//     if ($n % 2 == 0) {
//         echo "The Number is Even ";
//     } else {
//         echo "The Number is Odd ";
//     }
// }
// evenodd(6);

//=======================================================================
//Write a php function to check if the data is valid in array or not
// Function take two parameters ( array , item)
// **************************** 4 ****************************

// $arr = ["Abdallah", "Moahmed", "Ahmed"];
// function check($arr, $item)
// {
//     if (in_array($item, $arr)) {
//         echo $item . " Is Valid ";
//     } else {
//         echo "Invalid";
//     }
// }
// check($arr, "Abdallah");

//=======================================================================
//Write a php function to replace in a string with specific word and return true if any replace occurred , otherwise return false
// **************************** 5 ****************************

// function replace($string, $word)
// {
//     str_replace($word, "Father", $string, $i);
//     if ($i > 1) {
//         return "TRUE";
//     } else {
//         return "FALSE";
//     }
// }
// $string = "Hello Daddy . We Miss You Daddy";

// echo replace($string, "Daddy");

//=======================================================================
// **************************** 6 ****************************
// Write a php function that take two parameters

function fullName($fName, $lName)
{
    return "FullName : " . $fName . " " . $lName;
}

echo fullName("Abdallah", "Hamdy");
