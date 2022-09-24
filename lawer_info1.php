<?php
	$file = "lawer_info1.php";
	$date = "Sept 24, 2022";
	$description = "This is the information page of immigration law firms";
	$title = "Silent Storm Hackathon Law Firm Info Page";
	$banner = "Law Diamond";
	
	include ("./header.php");
?>	

<html>
<head>
<title>Law Diamond</title>
</head>

<body>
<center>


<!-- setup the table -->
<table border="0" width="100%">
	<tr><th width="30%"></th><th width="35%"></th><th width="35%"></th></tr>
	<tr><td><img src="./images/agent_patel.jpg" alt="Clara Patel" width="100%"/></td>
		<td><h2>Services:</h2></br>
			<ul>
				<li>Study Permit</li>
				<li>Open Work Permit</li>
				<li>Postgraduate Work Permit</li>
				<li>Provincial Nominee</li>
				<li>EE</li>
				<li>Family Reunion</li>
			</ul>
		</td>
		<td><h2>Service area:</h2></br> 
			<ul>
				<li>Mississauga</li>
				<li>Toronto</li>
			</ul>
		</td>
	</tr>
	<tr>
		<td>Ms.Patel has a Law degree from University of Toronto. 
			She has been provideing various services in immigration field for over 10 years.</td>
		<td><h2>Now 15% discount for employees!</h2></td>
		<td>
			<ul>
				<li>Tel: 905-297-0001</li>
				<li>Email: clara.p@immiservice.ca</li>
				<li>Address: 2005 Makeup Blvd, Mississauga, ON L4Y 2G2</li>
			</ul>
		</td>
	</tr>

</table>
<!-- end the table -->

</center>
</body>

</html>

<?php
include ("./footer.php");
?>