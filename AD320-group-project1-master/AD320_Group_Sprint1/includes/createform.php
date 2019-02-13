<form action="includes/create.php" method="POST" onsubmit="return val();" name="form">
<div class='grid-container'>
    <div class='grid-item'>
        <label for="bar name">Bar name:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="name" tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="street address">Street Address:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="street" tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="city">City:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="city" tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="zipcode">Zip code:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="zip" tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="phone number">Phone number:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="phone" tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="happy hour">Time of happy hour:</label>
    </div>
    <div class='grid-item2'>
        <input type="text" name="hh"  tabindex="10" size="30">
    </div>
    <div class='grid-item'>
        <label for="awesome">Why is it awesome?</label>
    </div>
    <div class='grid-item2'>
        <textarea type="text" name="awesome" cols="30" rows="4" tabindex="30"></textarea>
    </div>
    <div class='grid-item'>
        <label for="submit"></label>
    </div>
    <div class='grid-item2'>
        <input class="submit" type="submit" name="submit" value="create">
    </div>
    <div id="req"></div>
</div>
</form>
