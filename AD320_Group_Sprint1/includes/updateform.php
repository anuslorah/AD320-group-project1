<h3>Select a bar listing:</h3>
<form action="read.php" method="POST">
    <label>City:</label>
    <input type="text" name="city">
    <br>
    <label>Zip:</label>
    <input type="text" name="zip">
    <br>
    <label></label><input type="submit" name="submit" value="search">
</form>
<form action="includes/update.php" method="POST">

    <label>Bar name:</label><input type="text" name="name" tabindex="10" size="30">
    <br>
    <label>Street Address:</label>
    <input type="text" name="streetAddress" tabindex="10" size="30">
    <br>
    <label>City:</label><input type="text" name="city" tabindex="10" size="30">
    <br>
    <label>Zip code:</label><input type="text" name="zip">
    <br>
    <label>Phone number:</label><input type="text" name="phone" tabindex="10" size="30">
    <br>
    <label>Time of happy hour:</label><input type="text" name="happyhour" cols="36" rows="4" tabindex="40">
    <br>
    <label>Why is it awesome?</label><input type="text" name="awesome" cols="36" rows="4" tabindex="40">
    <br>
    <label></label><input type="submit" name="submit" value="search">
</form>