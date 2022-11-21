<?php
// ==========================================
// o Check if the user submit the form or not
// ***************** 1 ***********************
// ==========================================
// Get data from super global $_GET and put assign these data to variables
// ***************** 2 ***********************

// ==========================================
// Display these variables in h3
// ***************** 3 ***********************

// if (isset($_GET["submit"])) {
//     $name = $_GET["name"];
//     $email = $_GET["email"];
//     echo "<h3>" . $name . "</h3>";

//     echo "<h3>" . $email . "</h3>";
// } else {
//     return false;
// }



// ==========================================
// Make there links that send data through these links
// ***************** 4 ***********************
if (isset($_GET["name"])) {
    echo "<h3>" . $_GET["name"] . "</h3>";
}
// 
if (isset($_GET["email"])) {
    echo "<h3>" . $_GET["email"] . "</h3>";
}
if (isset($_GET["phone"])) {
    echo "<h3>" . $_GET["phone"] . "</h3>";
}


// ==========================================
// Display these data in table
// ***************** 5 ***********************
$products = [["product number 1", 300, 50],  ["product number 2", 250, 1000],  ["product number 3", 30, 1200],  ["product number 4", 1500, 10],  ["product number 5", 450, 300],];

echo "<table border=\"1\" style=\"background-color: #D6EEEE; width:65%\">";
echo "<tr><th>Product </th><th>Price</th><th>Code</th></tr>";

for ($i = 0; $i < count($products); $i++) {
    echo "<tr>";
    for ($a = 0; $a < 3; $a++) {
        echo "<td  >" . $products[$i][$a] . "</td>";
    }
    echo "</tr>";
}
