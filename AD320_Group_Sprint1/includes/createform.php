<form action="includes/create.php" method="POST">
	<h3>Add a bar:</h3>
	<label for "bar">Bar name:</label><input type="text" name="name" tabindex="10" size="30">
	<br>
	<label for "streetAddress">Street Address:</label>
	<input type="text" name="street" tabindex="10" size="30">
	<br>
	<label for "city">City:</label><input type="text" name="city" tabindex="10" size="30">
	<br>
	<label for "zipcode">Zip code:</label><input type="text" name="zip">
	<br>
	<label for "phone number">Phone number:</label><input type="text" name="phone" tabindex="10" size="30">
	<br>
	<label for "happy hour">Time of happy hour:</label><input type="text" name="hh" rows="4" tabindex="40">
	<br>
	<label for "awesome">Why is it awesome?</label><input type="text" name="awesome" rows="4" tabindex="40">
	<br>
	<label></label><input type="submit" name="submit" value="create">
</form>