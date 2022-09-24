
<?php
	
	$file = "program_decision_form.php";
	$date = "Sept 24, 2022";
	$description = "This is the form for possible programs";
	$title = "Silent Storm's Program Form Page";
	$banner = "Program Decision Form";

include ("./header.php");
?>
	
	<h2>This is for demonstration purpose only.</h2>  

	<FORM method="post" action="program_decision.php">
	<p>Years you have been in Canada: <input type="text" name="val1" size="10"></p>
	<p>Years you have been working in Canada: <input type="text" name="val2" size="10"></p>
	
	<p>Your current status:<br>
	<INPUT type="radio" name="calc" value="pr"> Permanent Resident<br>
	<INPUT type="radio" name="calc" value="worker"> Temporary Foreign Worker<br>
	<INPUT type="radio" name="calc" value="student"> International Student<br>
			
	<p><INPUT type="submit" name="submit" value="Enter"></p>

	<a href="./index.php">Click here to go back to the main page</a>

<?php
include ("./footer.php");
?>