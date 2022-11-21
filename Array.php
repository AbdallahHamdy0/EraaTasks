<?php
// ==========================================================
// Write a PHP script which will display the colors in h2
// **************************** 1 ****************************
$colors = ["red", "green", "blue", "black", "white"];

// for ($i = 0; $i < count($colors); $i++) {
//     echo "<h2>" . " # " . $colors[$i] . "</h2>";
// }


// ==========================================================
// Display previous array in ul > li
// **************************** 2 ****************************

// echo "<ul>";
// foreach ($colors as $color) {
//     echo "<li>" . $color . "</li>";
// }
// echo "</ul>";

// ===========================================================
// Add three colors to the previous array and display colors in h3
// **************************** 3 ****************************

// array_push($colors, "Orange", "Brown", "Purple");
// // array_unshift($colors, "Orange", "Brown", "Purple");

// for ($i = 0; $i < count($colors); $i++) {
//     echo "<h3>" . $colors[$i] . "</h3>";
// }

// ===========================================================
//  Display this array in h3
// **************************** 4 ****************************
$numbers = [10, 20, 30, 40, 50];



// foreach ($numbers as $num) {
//     echo "<h3>" . $num . "</h3>";
// }
// ===========================================================
// Make a new array with these items plus 5
// **************************** 5 ****************************
// $numsplus5 = [];
// foreach ($numbers as $num) {
//     array_push($numsplus5, $num + 5);
// }
// echo "<pre>";
// print_r($numsplus5);
// echo "</pre>";

//===========================================================
//  Make a new array with these items divided by 3
// **************************** 6 ****************************
// $numsdiv3 = [];
// foreach ($numbers as $num) {
//     array_push($numsdiv3, $num / 3);
// }
// echo "<pre>";
// print_r($numsdiv3);
// echo "</pre>";

//===========================================================
//  add these items 60,70,80 to the array to
// **************************** 7 ****************************

// array_push($numbers, 60, 70, 80);
// echo "<pre>";
// print_r($numbers);
// echo "</pre>";
// **************************** 8 ****************************

// $users = [["mohamed ali", 20], ["rana ahmad", 19],  ["maged khaled", 25],];


// foreach ($users as $user) {

//     echo "<div style=border:" . "5px solid black" . "width:300px" . "margin:20px auto" . ">";

//     for ($i = 0; $i < count($user); $i++) {
//         echo "<h3>" . $user[$i] . "</h3>";
//     }
//     echo "</div>";
//     echo  "<hr>";
// }
// =============================================
// **************************** 9 ****************************

// Display these items in table
$employees = [["mohamed ali", "mohamad@eraasoft.com", "01024256993", 2500],  ["reham mohamad", "reham@eraasoft.com", "01122255448", 3000],  ["maged hesham", "maged@eraasoft.com", "01024213361", 4000],  ["ali mahmoud", "ali@eraasoft.com", "01142547485", 2000],  ["nader elsayed", "nader@eraasoft.com", "01123659854", 1000],];

// echo "<table border=\"1\" style=\"background-color: #D6EEEE; width:65%\">";
// echo "<tr><th>Name </th><th>Email</th><th>Phone</th><th>Salary</th></tr>";

// for ($i = 0; $i < count($employees); $i++) {
//     echo "<tr>";
//     for ($a = 0; $a < 4; $a++) {
//         echo "<td  >" . $employees[$i][$a] . "</td>";
//     }
//     echo "</tr>";
// }
