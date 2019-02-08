<?php

include 'config.php';
include 'header2.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    echo "<form action=\"\" method=\"post\">";
	echo "<h2>$name | $city</h2>";
	echo "<label>What would you like to edit?</label>";
	echo "<div>"."<input type=\"checkbox\" name=\"phone\" value='".$_POST['phone']."'>Phone Number"."</div>";
	echo "<div>"."<input type=\"checkbox\" name=\"hh\" value='".$_POST['hh']."'>Happy Hour!"."</div>";
	echo "<div>"."<input type=\"checkbox\" name=\"awesome\" value='".$_POST['awesome']."'>What's Awesome?"."</div>";
	echo "<div>"."<input type='hidden' name='name' value='$name'>"."</div>";
	echo "<div>"."<input type='hidden' name='city' value='$city'>"."</div>";
	echo "<div>"."<input type=\"submit\" name=\"edit\" value=\"Edit!\"></div></form>";
} elseif(isset($_POST['edit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $hh = $_POST['hh'];
    $awesome = $_POST['awesome'];
    echo "<form action='../page2.php?name=$name?city=$city' method='post'>";
    if (!empty($phone)){
        echo "<label>Phone Number:</label>";
		echo "<input type=\"text\" name=\"arr[phone]\" placeholder='$phone'>";    }
    if (!empty($hh)){
        echo "<label>Happy Hour:</label>";
		echo "<input type=\"text\" name=\"arr[happyHour]\" placeholder='$hh'>";
    }
    if (!empty($awesome)){
        echo "<label>What's awesome?</label>";
		echo "<input type=\"text\" name=\"arr[awesome]\" placeholder='$awesome'>";
    }
    if (!empty($phone) || !empty($hh) || !empty($awesome)){

        echo "<input type='hidden' name='name' value='$name'>";
		echo "<input type='hidden' name='city' value='$city'>";
		echo "<input type='submit' name='submit' value='Update'>";
    }
    echo "</form>";
}

include "footer2.php";
