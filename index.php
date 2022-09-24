<?php
	$file = "index.php";
	$date = "Sept 20, 2022";
	$description = "This is the home page of Silent Storm Hackathon";
	$title = "Silent Storm Hackathon Index Page";
	$banner = "Service for Diversity, Equity and Inclusion";

	include ("./header.php");
?>

<img src="./images/diversity.jpg" class="center-image"/>

<br/><br/>

<h2>What Does Diversity, Equity and Inclusion Mean Here? </h2>
<p>
The idea of Diversity, Equity, and Inclusion in the workplace is not just some slogan. 
We understand that our employees from different backgrounds often worry about work permits and 
permanent residency applications. 
They might also want to help their families, including their spouses, kids, and parents move to Canada.
True Diversity, Equity, and Inclusion means helping our diversified employees solve real problems, 
to make them feel included in an equal workplace. 
If you are one of them, do you often have trouble finding useful and up-to-date information? 
Do you feel difficult to find reliable immigration agents and lawyers? 
Is the service fee a little hard to afford? We’ve got your back. On this website, you will 
find regularly updated immigration information, as well as agents and lawyers with proven service r
ecords. What is even better is you can enjoy a company discount when using their services! 
Explore the website, you will find more!
</p>

<!-- setup the table -->
<table border="0" width="100%">
	<tr><th width="34%"><li><a href="./agent_list.php">Immigration Agent</a></li></th>
		<th width="34%"><li><a href="./lawyer_list.php">Immigration Law Firm</a></li></th>
		<th width="32%"><li><a href="./useful_links.php">Useful Info</a></li></th></tr>
	<tr><th><img src="./images/agent1.jpg" alt="Immigration Agent" width="90%"/></th>
		<th><img src="./images/lawyer1.jpg" alt="Immigration Lawyer" width="90%"/></th>
		<th><img src="./images/library1.jpg" alt="Immigration Info" width="90%"/></th>
</table>

<?php
include ("./footer.php");
?>