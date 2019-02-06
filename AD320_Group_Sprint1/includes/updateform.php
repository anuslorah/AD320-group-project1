<h3>Select a bar listing:</h3>
<form action="read.php" method="POST">
    <label for="city">City:</label>
    <input type="text" name="city">
    <br>
    <label for="zip code">Zip:</label>
    <input type="text" name="zip">
    <br>
    <label for="search"></label><input type="submit" name="submit" value="search">
</form>
<div class='grid-container'>
<form action="includes/update.php" method="POST">
	<div class='grid-item'>
		<label for="bar name">Bar name:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="name" tabindex="10" size="30">
	</div>
    <br>
	<div class='grid-item'>
		<label for="street address">Street Address:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="streetAddress" tabindex="10" size="30">
	</div>
	<br>
	<div class='grid-item'>
		<label for="city">City:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="city" tabindex="10" size="30">
	</div>
	<br>
	<div class='grid-item'>
		<label for="zip code">Zip code:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="zip">
	</div>
	<br>
    <div class='grid-item'>
		<label for="phone number">Phone number:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="phone" tabindex="10" size="30">
	</div>
    <br>
	<div class='grid-item'>
		<label for="time for happy hour">Time of happy hour:</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="happyhour" cols="36" rows="4" tabindex="40">
	</div>
    <br>
	<div class='grid-item'>
		<label for="awesomeness">Why is it awesome?</label>
	</div>
	<div class='grid-item'>
		<input type="text" name="awesome" cols="36" rows="4" tabindex="40">
	</div>
    <br>
	<div class='grid-item'>
		<label for="search"></label>
	</div>
	<div class='grid-item'>
		<input type="submit" name="submit" value="search">
	</div>
</form>
</div>