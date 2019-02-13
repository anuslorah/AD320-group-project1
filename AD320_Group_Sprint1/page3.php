<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<h2>Select a bar to delete: </h2>

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
                echo "<h2>Request to delete the bar has been sent to administrator!</h2>";
            }

        } else {
            echo "    <div id=\"formdiv\">
        <form action=\"includes/delete.php\" method=\"POST\">";
            echo "<div class='grid-container'>";
            if (isset($_SESSION['u_uid']) == "admin"){
                echo "<div class='grid-item'><label>City:</label></div>
            <div class='grid-item2'><input type=\"text\" name=\"city\"></div>
            <div class='grid-item'><label>Zip:</label></div>
            <div class='grid-item2'><input type=\"text\" name=\"zip\"></div>
            
            <div class='grid-item'><label>Bar ID:</label></div>
            <div class='grid-item2'><input type=\"text\" name=\"id\"></div>";
            } else {
                echo "<div class='grid-item'><label>City:</label></div>
            <div class='grid-item2'><input type=\"text\" name=\"city\"></div>
            <div class='grid-item'><label>Zip:</label></div>
            <div class='grid-item2'><input type=\"text\" name=\"zip\"></div>";
            }
            echo "<div class='grid-item'><label></label></div>
            <div class='grid-item2'><input type=\"submit\" name=\"submit\" value=\"search\"></div>
        </div></form></div>

    <div id=\"fb\">";
        }
        ?>
    </div>

    </div> <!--this is not error/opening div is in header.php-->

<?php include 'includes/footer.php'; ?>