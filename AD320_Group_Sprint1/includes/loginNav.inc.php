<?php
if (isset($_SESSION['u_uid'])){
    echo "<nav id=\"loginNav\">
    <form action=\"includes/logout.inc.php\" method='post'>
    <input type='submit' name='submit' value='Logout'>
    </form>
</nav>";
} else {
    echo "<nav id=\"loginNav\">
    <a href=\"login.php\">Login</a>
    <a href=\"signup.php\">Sign Up</a>
</nav>";
}



