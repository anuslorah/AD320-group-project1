<?php

include 'config.php';
include 'header2.php';
if (isset($_POST['submit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    echo "<form id=\"editform\" action=\"\" method=\"post\">";
	echo "<h2>$name | $city</h2>";
	echo "<label>What would you like to edit?</label>";
	echo "<div>"."<input type=\"checkbox\" name=\"phone\" value='".$_POST['phone']."'>Phone Number"."</div>";
	echo "<div>"."<input type=\"checkbox\" name=\"hh\" value='".$_POST['hh']."'>Happy Hour!"."</div>";
	echo "<div>"."<input type=\"checkbox\" name=\"awesome\" value='".$_POST['awesome']."'>What's Awesome?"."</div>";
	echo "<div>"."<input type='hidden' name='name' value='$name'>"."</div>";
	echo "<div>"."<input type='hidden' name='city' value='$city'>"."</div>";
	echo "<div>"."<input type=\"submit\" id=\"updatebutton\" name=\"edit\" value=\"Edit!\"></div></form>";
} elseif(isset($_POST['edit'])){
    $name = $_POST['name'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $hh = $_POST['hh'];
    $awesome = $_POST['awesome'];
    echo "<form action='../page2.php?name=$name?city=$city' method='post'>";
    if (!empty($phone)){
        echo "<div id='edit'>";
        echo "<div><label>Phone Number: </label></div>";
		echo "<div><input type=\"text\" name=\"arr[phone]\" placeholder='$phone'></div>";
        echo "</div>";
    }
    if (!empty($hh)){
        echo "<div id='edit'>";
        echo "<div><label>Happy Hour: </label></div>";
		echo "<div><input type=\"text\" name=\"arr[happyHour]\" placeholder='$hh'></div>";
        echo "</div>";
    }
    if (!empty($awesome)){
        echo "<div id='edit'>";
        echo "<div><label>What's awesome? </label></div>";
		echo "<div><input type=\"text\" name=\"arr[awesome]\" placeholder='$awesome'></div>";
        echo "</div>";
    }
    if (!empty($phone) || !empty($hh) || !empty($awesome)){
        echo "<div id='edit'>";
        echo "<div><input type='hidden' name='name' value='$name'></div>";
		echo "<div><input type='hidden' name='city' value='$city'></div>";
		echo "<div><input type='submit' id=\"updatebutton\" name='submit' value='Update'></div>";
        echo "</div>";
    }
    echo "</form>";
}

include "footer2.php";
