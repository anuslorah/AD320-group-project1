<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

    <div id="fb">
        <?php
        if (isset($_POST['submit'])){
            include "includes/dbh.php";
            $name = $_POST['name'];
            $city = $_POST['city'];
            $sql = "UPDATE bar SET ";
            $arr = $_POST['arr'];
            $i = 1;
            $count = count($arr);
            foreach($arr as $key => $value) {
                if ($i == $count){
                    $sql .= " $key = '$value' ";
                } else {
                    $sql .= " $key = '$value', ";
                    $i++;
                }

            }
            $sql .= "WHERE barName = '$name' AND city = '$city';";

            if(! $conn ) {
                die('Could not connect: ' . mysqli_error());
            }
            if (mysqli_query($conn, $sql)) {
                echo "<br>Successfully updated $name";
            } else {
                echo "<br>Fail";
            }

            mysqli_close($conn);
        }
        ?>
    </div>

<div id="formdiv">
<!--    <form action="includes/update.php" method="POST">-->
<!--        <label>City:</label>-->
<!--        <input type="text" name="city">-->
<!--        <br>-->
<!--        <label>Zip:</label>-->
<!--        <input type="text" name="zip">-->
<!--        <br>-->
<!--        <label></label><input type="submit" name="submit" value="search">-->
<!--    </form></div>-->
    <form action="includes/update.php" method="POST">
        <div class='grid-container'>
            <div class='grid-item'>
                <label for="city">City:</label>
            </div>
            <div class='grid-item2'>
                <input type="text" name="city">
            </div>
            <div class='grid-item'>
                <label for="zip code">Zip:</label>
            </div>
            <div class='grid-item2'>
                <input type="text" name="zip">
            </div>
            <div class='grid-item'>
                <label for="search"></label>
            </div>
            <div class='grid-item2'>
                <input type="submit" name="submit" value="search">
            </div>
        </div>
    </form>
</div>

</div> <!--this is not error/opening div is in header.php-->
<?php include 'includes/footer.php'; ?>