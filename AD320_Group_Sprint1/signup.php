<?php include_once 'includes/header.php' ?>


<form action="includes/signup.inc.php" id="login" method="POST" id="signup">
    <div><input type="text" name="first" placeholder="Firstname"></div>
    <div><input type="text" name="last" placeholder="Lastname"></div>
    <div> <input type="email" name="email" placeholder="E-mail"></div>
    <div> <input type="text" name="uid" placeholder="Username"></div>
    <div><input type="password" name="pwd" placeholder="Password"></div>
    <div><input type="submit" name="submit" value="Sign Up"></div>
</form>
</div>
<?php include_once 'includes/footer.php' ?>
