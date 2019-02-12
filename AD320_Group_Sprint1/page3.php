<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>



        <?php
        if (isset($_POST['submit'])){
            if (isset($_SESSION['u_uid']) == "admin"){
                include "includes/dbh.php";
                $barID = $_POST['id'];
                $name = $_POST['name'];
                $sql = "DELETE FROM `bar` WHERE `barID` = \"$barID\";";
                if(! $conn ) {
                    die('Could not connect: ' . mysqli_error());
                }
                if (mysqli_query($conn, $sql)) {
                    echo "<br>Successfully deleted $name at Bar ID $barID";
                } else {
                    echo "<br>Fail";
                }
                mysqli_close($conn);
            } else {
                $msg = "<div style='background: beige; border-radius: 10px; padding: 1em; margin: 1em; line-height: 1.25;'><h1>You have a delete request!</h1>";
                $msg .= "<p>".$_POST['name']."</p>";
                $msg .= "Please <a href='http://websitesinseattle.com/happyhour/login.php'>login</a> to delete ".$_POST['name']." with barID ".$_POST['id']."</div>";
                $fromAddress = "migace1@radagast.dreamhost.com";
                $fromDomain = $_SERVER["SERVER_NAME"];

                $headers .= "Reply-To: noreply@besthappyhour.com <$fromAddress>\r\n";
                $headers .= "Return-Path: noreply@besthappyhour.com <$fromAddress>\r\n";
                $headers .= "From: noreply@besthappyhour.com <$fromAddress>\r\n";
                $headers .= "MIME-Version: 1.0\r\n";
                $headers .= "Content-type:text/html;charset=UTF-8\r\n";
                $headers .= "X-Priority: 3\r\n";
                $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;

                mail("migtomace@gmail.com", "Delete Request!", $msg, $headers);
                echo "<h1>Request has been sent!</h1>";
            }

        } else {
            echo "    <div id=\"formdiv\">
        <form action=\"includes/delete.php\" method=\"POST\">";
            if (isset($_SESSION['u_uid']) == "admin"){
                echo "<label>City:</label>
            <input type=\"text\" name=\"city\">
            <br>
            <label>Zip:</label>
            <input type=\"text\" name=\"zip\">
            <br>
            <label>Bar ID:</label>
            <input type=\"text\" name=\"id\">
            <br>";
            } else {
                echo "<label>City:</label>
            <input type=\"text\" name=\"city\">
            <br>
            <label>Zip:</label>
            <input type=\"text\" name=\"zip\">
            <br>";
            }
            echo "<label></label><input type=\"submit\" name=\"submit\" value=\"search\">
        </form></div>

    <div id=\"fb\">";
        }
        ?>
    </div>

    </div> <!--this is not error/opening div is in header.php-->

<?php include 'includes/footer.php'; ?>