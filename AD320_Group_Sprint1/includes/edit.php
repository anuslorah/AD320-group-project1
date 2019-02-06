<?php

include 'config.php';
include 'header2.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    echo "<form action=\"\" method=\"post\">
    <h1>$name | $city</h1>
    <label>What would you like to edit?</label>
    <input type=\"checkbox\" name=\"phone\" value='".$_POST['phone']."'>Phone Number<br>
    <input type=\"checkbox\" name=\"hh\" value='".$_POST['hh']."'>Happy Hour!<br>
    <input type=\"checkbox\" name=\"awesome\" value='".$_POST['awesome']."'>What's Awesome?<br>
    <input type='hidden' name='name' value='$name'>
    <input type='hidden' name='city' value='$city'>
    <input type=\"submit\" name=\"edit\" value=\"Edit!\">
</form>";
} elseif(isset($_POST['edit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $hh = $_POST['hh'];
    $awesome = $_POST['awesome'];
    echo "<form action='../page2.php?name=$name?city=$city' method='post'>";
    if (!empty($phone)){
        echo "<label>Phone Number:</label>
<input type=\"text\" name=\"arr[phone]\" placeholder='$phone'><br>
";
    }
    if (!empty($hh)){
        echo "<label>Happy Hour:</label>
<input type=\"text\" name=\"arr[happyHour]\" placeholder='$hh'><br>";
    }
    if (!empty($awesome)){
        echo "<label>What's awesome?</label>
<input type=\"text\" name=\"arr[awesome]\" placeholder='$awesome'><br>";
    }
    if (!empty($phone) || !empty($hh) || !empty($awesome)){

        echo "    <input type='hidden' name='name' value='$name'>
    <input type='hidden' name='city' value='$city'><input type='submit' name='submit' value='Update'>";
    }
    echo "</form>";
}

include "footer2.php";
