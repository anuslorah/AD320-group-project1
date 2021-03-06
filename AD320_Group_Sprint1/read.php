<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/28/2019
 * Time: 12:44 AM
 */
include 'includes/config.php';
include 'includes/header.php';

if (isset($_POST['submit'])){

    include 'includes/dbh.php';

    $city = $_POST['city'];
    $zip = $_POST['zip'];

    //error handlers
    //check if inputs are empty
    if (empty($city) && empty($zip)){
        header("Location: ../index.php?field=empty");
        echo "<h3>" . "Try entering a city or a zip code!" . "</h3>";
        exit();
    } elseif(!empty($city)) {

        $sql = "SELECT * FROM bar WHERE city = '$city'";
        if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
        }
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
            echo "<div class='grid-container'>";
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
				echo "<div class='grid-item'>"."Bar: ".$row['barName']."</div>". "<div class='grid-item'>".$row['streetAddress'].", ".$row['city'].", ".$row['zipcode']."<br>Phone: ".$row['phone']."</div>"."<div class='grid-item'>"."Happy Hour: ".$row['hh']."</div>"."<div class='grid-item'>"."Awesome: ".$row['awesome']."</div>"."<div class='grid-item2'></div>"."<div class='grid-item2'></div>";
            }
			echo "</div>";
        } else {
            echo "<h3>" . "There are no matching bars in the database." . "</h3>";
        }

        mysqli_close($conn);
    } elseif (!empty($zip)){
        $sql = "SELECT * FROM `bar` WHERE zipcode = '$zip'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck > 0) {
			echo "<div class='grid-container'>"; 
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
				echo "<div class='grid-item'>"."Bar: ".$row['barName']."</div>"."<div class='grid-item'>"."Address: ".$row['streetAddress'].", ".$row['city'].", ".$row['zipcode']."<br>Phone: ".$row['phone']."</div>"."<div class='grid-item'>"."Happy Hour: ".$row['hh']."</div>"."<div class='grid-item'>"."Awesome: ".$row['awesome']."</div>"."<div class='grid-item2'></div>"."<div class='grid-item2'></div>";
				
            }
			echo "</div>";
        } else {
            echo "<h3>" . "There are no matching bars in the database." . "</h3>";
        }
    } else {
        header("Location: ../index.php?zip_city=error");
    }
}else {
    header("Location: ../index.php?read=error");
    exit();
}

include "footer.php";
