<?php
// Abdallah Hamdy Hammad
// **************************** 1 ****************************

//  Make random two numbers for ages and
$number1 = rand(1, 90);
$number2 = rand(1, 100);



// if ($number1 > $number2) {
//     echo "Ahmed is older than Mohmed";
// } elseif ($number1 < $number2) {
//     echo "Mohamed is older than Ahmed";
// } else {
//     echo "age of Ahmed and Mohamad is $number1";
// }

//===============================================================================
// Get two random strings from previous string

// **************************** 2 ****************************

$articel = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque illo, vero officiis laudantium enim minus corrupti ipsam! Veniam culpa a qui, nobis pariatur placeat beatae dolores aperiam consequatur deserunt temporibus? Pariatur nulla vel natus necessitatibus nam exercitationem eligendi expedita, provident distinctio non praesentium officiis quaerat veniam, laborum id accusamus voluptas suscipit. Accusamus, sequi cumque veniam eius atque fuga modi minus earum repellat tenetur delectus beatae explicabo natus corporis hic qui amet obcaecati suscipit, repudiandae vero sit doloremque, consequuntur aperiam? Facere amet aspernatur debitis, quisquam animi suscipit accusantium id architecto nobis, quis pariatur perferendis, molestiae distinctio quia ut beatae dicta laudantium excepturi natus! Mollitia culpa magni voluptatum maiores nulla non illo pariatur libero ipsam numquam, assumenda cumque reprehenderit exercitationem eos accusantium animi, at fugit doloremque iusto dolorum magnam officiis. Optio cumque dolor architecto blanditiis, fugiat animi tenetur. Asperiores excepturi atque earum possimus est consequatur architecto exercitationem inventore tempore nostrum dolor dolorum corrupti numquam totam, quae, reiciendis dicta, illum cupiditate vel ea enim optio. Fugiat ipsa error, deserunt officiis suscipit numquam rerum dignissimos rem, nihil quis amet aliquid temporibus? Similique numquam consequatur labore molestiae sed earum dolor, explicabo suscipit in laboriosam ut, natus architecto. Perspiciatis quia molestiae, eos voluptatibus numquam id at?";
$str1 = substr($articel, $number1, strlen($articel));
$str2 = substr($articel, $number2, strlen($articel));
// echo "First : " . $str1 . " Second : " . $str2 . "<br>";

// if (strlen($str1) > 20 && strlen($str1) < 40) {
//     echo "string is week" . "<br>";
// } elseif (strlen($str1) > 40 && strlen($str1) < 80) {
//     echo "string is good" . "<br>";
// } elseif (strlen($str1) > 80) {
//     echo "string is very good" . "<br>";
// }


// if (strlen($str1) > strlen($str2)) {
//     echo "first is greater than second";
// } elseif (strlen($str1) < strlen($str2)) {
//     echo "first is smaller than second";
// } else {
//     echo "first is equal  second";
// }

//===============================================================================
// Make a calculator with these operations using if and
// **************************** 3 ****************************

// $sign = "+";
// if ($sign == "+") {
//     $sum = $number1 + $number2;
//     echo $number1 . '+' . $number2 . '=' . $sum;
// } elseif ($sign == "-") {
//     $sub = $number1 - $number2;
//     echo "$number1 - $number2 = " .  $sub;
// } elseif ($sign == "*") {
//     $mul = $number1 * $number2;
//     echo "$number1 * $number2 = " . $mul;
// } elseif ($sign == "/") {
//     $div = $number1 / $number2;
//     echo "$number1 / $number2 = " . $div;
// } elseif ($sign == "%") {
//     $mod = $number1 % $number2;
//     echo "$number1 % $number2 = " . $mod;
// } elseif ($sign == "po") {
//     $ex = pow($number1, $number2);
//     echo "$number1 ^ $number2 = " . $ex;
// }

//===============================================================================
// Make a program to check from degree of student to test these cases
// **************************** 4 ****************************


// $degree = 45;

// if ($degree >= 50 && $degree < 65) {
//     echo "accepted";
// } elseif ($degree >= 65 && $degree < 75) {
//     echo "Good";
// } elseif ($degree >= 75 && $degree > 85) {
//     echo "Very Good";
// } elseif ($degree >= 85) {
//     echo "Excellent";
// } else {
//     echo "Fail";
// }

//===============================================================================
// Check from this string
// **************************** 5 ****************************




// $description = "no peen , no gain ";

// if (strpos($description, "gain") || strpos($description, "peen")) {
//     echo "success";
// } else {
//     echo "wrong word";
// }

