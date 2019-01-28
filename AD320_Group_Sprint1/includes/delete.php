<?php
/**
 * Created by IntelliJ IDEA.
 * User: Miguel.Acevedo
 * Date: 1/28/2019
 * Time: 12:44 AM
 */

include 'header.php';

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

        $sql = "SELECT * FROM `bar` WHERE barName = '$name' AND phone = '$phone'";
        $result = mysqli_query($conn, $sql);
        $resultCheck = mysqli_num_rows($result);
        if ($resultCheck < 1){
            header("Location: ../index.php?bar=errorResult:$resultCheck");
            exit();
        } else {
            while ($row = mysqli_fetch_array($results)) {
                //output a row
//                needs styling
                echo "<form action='delete.db.php' method='post' class='deleteArray'>
<p>$row</p>
<input type='text' value='$name'>
<input type='text' value='$phone'>
<input type='submit' value='X'>
</form>";
            }
        }
    }
}else {
    header("Location: ../index.php?delete=error");
    exit();
}

include 'footer.php';