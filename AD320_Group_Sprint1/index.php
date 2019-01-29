<!-- Reason why we split the header and footer is so that we can put a php include in and just make changes within the header file for example and it will make changes in all the pages with this include instead of making styles for each page you just need to make it for the one file -->

<?php include 'includes/config.php'; ?>
<?php include 'includes/header.php'; ?>

<div id="formdiv">
<?php include 'includes/form.php'; ?>
	
</div>


</div> <!--this is not error/opening div is in header.php-->
<?php include 'includes/footer.php'; ?>