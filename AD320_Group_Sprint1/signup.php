<?php include_once 'includes/header.php' ?>


<form action="includes/signup.inc.php" method="POST" id="signup">
    <input type="text" name="first" placeholder="Firstname">
    <input type="text" name="last" placeholder="Lastname">
    <input type="email" name="email" placeholder="E-mail">
    <input type="text" name="uid" placeholder="Username">
    <input type="password" name="pwd" placeholder="Password">
    <input type="submit" name="submit" value="Sign Up">
</form>

<?php include_once 'includes/footer.php' ?>
