<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/28/2019
 * Time: 12:44 AM
 */


if (isset($_POST['submit'])){

    include 'dbh.php';

    $city = mysqli_real_escape_string($conn, $_POST['city']);
    $zip = mysqli_real_escape_string($conn, $_POST['zip']);

    //error handlers
    //check if inputs are empty
    if (empty($city) && empty($zip)){
        header("Location: ../index.php?field=empty");
        exit();
    } elseif(!empty($city)) {

        $sql = "SELECT * FROM `bar` WHERE city = '$city'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location: ../index.php?city=errorResult:$resultCheck");
            exit();
        } else {
            echo $result;
            }
    } elseif (!empty($zip)){
        $sql = "SELECT * FROM `bar` WHERE zipcode = '$zip'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location: ../index.php?zip=errorResult:$resultCheck");
            exit();
        } else {
            echo $result;
        }
    } else {
        header("Location: ../index.php?zip_city=error");
    }
}else {
    header("Location: ../index.php?read=error");
    exit();
}
