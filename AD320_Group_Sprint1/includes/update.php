<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/28/2019
 * Time: 12:44 AM
 */


if (isset($_POST['submit'])){

    include 'dbh.php';

    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $street = mysqli_real_escape_string($conn, $_POST['street']);
    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);
    $hh = mysqli_real_escape_string($conn, $_POST['hh']);
    $awesome = mysqli_real_escape_string($conn, $_POST['awesome']);

//    query to check if bar exists in database
    $sql = "SELECT * FROM `bar` WHERE `bar`.`barName` = '$name' AND `bar`.`phone` = $phone";

//    if results are not empty then do not insert data
    if (mysqli_query($conn, $sql)){
        echo "Bar exists in database";
    } else {
        //error handlers
        //check if inputs are empty
        if (empty($name) || empty($street) || empty($city) || empty($zip) || empty($phone) || empty($hh) || empty($awesome)){
            header("Location: ../index.php?field=empty");
            exit();
        } else {

            $sql = "INSERT INTO `bar` (`barName`, `streetAddress`, `city`, `zipcode`, `phone`, `happyHour`, `awesome`) VALUES ('$name', '$street', '$city', '$zip', '$phone', '$hh', '$awesome')";
            if (mysqli_query($conn, $sql)) {
                echo "New record created successfully";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
    }


}else {
    header("Location: ../index.php?update=error");
    exit();
}
