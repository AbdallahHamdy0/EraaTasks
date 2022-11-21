<?php
if (isset($_GET["id"])) {
    echo "<h1>" . "ID : " . $_GET["id"] . "</h1>";
}

if (isset($_POST["id"])) {
    echo "<h1>" . "ID : " . $_POST["id"] . "</h1>";
}
