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
    $phone = mysqli_real_escape_string($conn, $_POST['phone']);

    //error handlers
    //check if inputs are empty
    if (empty($name) || empty($phone)){
        header("Location: ../index.php?field=empty");
        exit();
    } else {

        $sql = "DELETE * FROM `bar` WHERE barName = '$name' AND phone = '$phone'";
        if (mysqli_query($conn, $sql)){
            echo "deleted successfully";
        } else {
            echo "Data not deleted successfully";
        }
    }
}else {
    header("Location: ../index.php?deletedb=error");
    exit();
}
