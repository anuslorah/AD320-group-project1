<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/28/2019
 * Time: 12:44 AM
 */
include 'config.php';
include 'header2.php';

if (isset($_POST['submit'])){

    include 'dbh.php';

    $city = $_POST['city'];
    $zip = $_POST['zip'];

    //error handlers
    //check if inputs are empty
    if (empty($city) && empty($zip)){
        header("Location: ../index.php?field=empty");
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
                echo "<form action=\"edit.php\" method=\"post\">
<div class='grid-item'>Bar: ".$row['barName']."</div><div class='grid-item'>".$row['streetAddress'].", ".$row['city'].", ".$row['zipcode']."<br>Phone: ".$row['phone']."</div>"."<div class='grid-item'>"."Happy Hour: ".$row['happyHour']."</div>"."<div class='grid-item'>"."Awesome: ".$row['awesome']."</div>"."<div class='grid-item2'></div>"."<div class='grid-item2'></div>    <input type=\"hidden\" name=\"name\" tabindex=\"10\" size=\"30\" value='".$row['barName']."'>
    <input type=\"hidden\" name=\"street\" tabindex=\"10\" size=\"30\" value='".$row['streetAddress']."'>
    <input type=\"hidden\" name=\"city\" tabindex=\"10\" size=\"30\" value='".$row['city']."'>
    <input type=\"hidden\" name=\"zip\" value='".$row['zipcode']."'>
    <input type=\"hidden\" name=\"phone\" tabindex=\"10\" size=\"30\" value='".$row['phone']."'>
    <input type=\"hidden\" name=\"hh\" cols=\"36\" rows=\"4\" tabindex=\"40\" value='".$row['happyHour']."'>
    <input type=\"hidden\" name=\"awesome\" cols=\"36\" rows=\"4\" tabindex=\"40\" value='".$row['awesome']."'>
    <br>
    <input type=\"submit\" name=\"submit\" value=\"Edit\">
</form>";
            }
            echo "</div>";
        } else {
            echo "0 results";
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
            echo "<form action=\"edit.php\" method=\"post\">
<div class='grid-item'>Bar: ".$row['barName']."</div><div class='grid-item'>".$row['streetAddress'].", ".$row['city'].", ".$row['zipcode']."<br>Phone: ".$row['phone']."</div>"."<div class='grid-item'>"."Happy Hour: ".$row['happyHour']."</div>"."<div class='grid-item'>"."Awesome: ".$row['awesome']."</div>"."<div class='grid-item2'></div>"."<div class='grid-item2'></div>    <input type=\"hidden\" name=\"name\" tabindex=\"10\" size=\"30\" value='".$row['barName']."'>
    <input type=\"hidden\" name=\"street\" tabindex=\"10\" size=\"30\" value='".$row['streetAddress']."'>
    <input type=\"hidden\" name=\"city\" tabindex=\"10\" size=\"30\" value='".$row['city']."'>
    <input type=\"hidden\" name=\"zip\" value='".$row['zipcode']."'>
    <input type=\"hidden\" name=\"phone\" tabindex=\"10\" size=\"30\" value='".$row['phone']."'>
    <input type=\"hidden\" name=\"hh\" cols=\"36\" rows=\"4\" tabindex=\"40\" value='".$row['happyHour']."'>
    <input type=\"hidden\" name=\"awesome\" cols=\"36\" rows=\"4\" tabindex=\"40\" value='".$row['awesome']."'>
    <br>
    <input type=\"submit\" name=\"submit\" value=\"Edit\">
</form>";

            }
            echo "</div>";
        } else {
            echo "0 results";
        }
    } else {
        header("Location: ../index.php?zip_city=error");
    }
}else {
    header("Location: ../index.php?read=error");
    exit();
}

include "footer2.php";
