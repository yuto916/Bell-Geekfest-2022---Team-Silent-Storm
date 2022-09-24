<?php
	$file = "agent_list.php";
	$date = "Sept 21, 2022";
	$description = "This is the agent list page of Silent Storm Hackathon";
	$title = "Silent Storm Hackathon Agent List Page";
	$banner = "List of Immigration Agents";
	
	$message = "";
	include ("./header.php");
	$conn = pg_connect("host=".DB_HOST." dbname=".DATABASE." user=".DB_ADMIN." password=".DB_PASSWORD); 

	
?>	

<html>
<head>
<title>Immigration Agent List</title>
</head>

<body>
<center>
<h2>
Click name to find out more about the agents. 
</h2>




<form method="POST" action="<?php echo $_SERVER['PHP_SELF'] ?>">

    <h1> <?php echo $message; ?> </h1>
    <h1>Search by City: </h1>
    
    <input type="text" id="city" name="city" size="20" required autofocus>
    <p><input type="submit" value = "Search" /></p>
</form>



<!-- setup the table -->
<table class = "tbl" border="1" width="75%">
	<tr><th class = "tbl" width="15%">Agent</th><th class = "tbl" width="10%">City</th><th class = "tbl" width="15%">Tel</th><th class = "tbl" width="15%">Email</th><th class = "tbl" width="15%">Discount</th><th class = "tbl" width="15%">Website</th></tr>


<?php
	if($_SERVER["REQUEST_METHOD"] == "GET")
	{
		$output = ""; //Set up a variable to store the output of the loop 
		//connect
		//$conn = pg_connect("host=127.0.0.1 dbname=zhouy_db user=zhouy password=100854558");  

		//issue the query
		$sql = "SELECT name, city, tel, email, discount, website
					FROM agents";
					
		$result = pg_query($conn, $sql);
		$records = pg_num_rows($result);

		//generate the table
		for($i = 0; $i < $records; $i++)
		{  //loop through all of the retrieved records and add to the output variable
			$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($result, $i, "name")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "city")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "tel")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "email")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "discount")."</td>"; 
			$output .= "\n\t\t<td>".pg_fetch_result($result, $i, "website")."</td>\n\t</tr>"; 
		}

	echo $output; //display the output
	}


    if($_SERVER['REQUEST_METHOD']=='POST')
    {
        $city = trim($_POST['city']);
        $sql = "SELECT * FROM agents WHERE city = '".$city."'";
        $results = pg_query($conn,$sql);
		$records = pg_num_rows($results);
		$output = "";
		
        if(pg_num_rows($results)>0)
        {
            for($i = 0; $i < $records; $i++)
			{  //loop through all of the retrieved records and add to the output variable
				$output .= "\n\t<tr>\n\t\t<td>".pg_fetch_result($results, $i, "name")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "city")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "tel")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "email")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "discount")."</td>"; 
				$output .= "\n\t\t<td>".pg_fetch_result($results, $i, "website")."</td>\n\t</tr>"; 
			}
			echo $output; //display the output
        }
        else
        {
            $message = "Cannot find information";
            //log in fail message.
        }
    }

    //validation


    //Somewhere you make the decision the user need to be redirected. 
    //header("Location:./dashboard.php");
    //ob_flush();

?>

<h3><?php echo $message; ?></h3>


</table>
<!-- end the table -->

</center>
</body>

</html>

<?php
include ("./footer.php");
?>