<!DOCTYPE html>
<html>
<head>
	<title>Thanjavur | AG Beyond</title>
	 <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<style>
		table {
		  font-family: arial, sans-serif;
		  border-collapse: collapse;
		  width: 100%;
		}

		td, th {
		  border: 1px solid #dddddd;
		  text-align: left;
		  padding: 8px;
		}

		tr:nth-child(odd) {
		  background-color: #dddddd;
		}
		
		.topnav a {
			  float: left;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
			}

			/* Change the color of links on hover */
			.topnav a:hover {
			  background-color: #ddd;
			  color: black;
			}

			/* Add a color to the active/current link */
			.topnav a.active {
			  background-color: #4CAF50;
			  color: white;
			}
			.top a {
			  float: right;
			  color: #f2f2f2;
			  text-align: center;
			  padding: 14px 16px;
			  text-decoration: none;
			  font-size: 17px;
			}

			   
			.logo-div{
			  float:left;
			  height: 10px;
			  width: 100%;
			}
			.hoverTable{
				width:100%; 
				border-collapse:collapse; 
			}
			.hoverTable td{ 
				padding:7px; border:#4e95f4 1px solid;
			}
			/* Define the hover highlight color for the table row */
			.hoverTable tr:hover {
				  background-color: #ccffcc;
			}
	</style>
</head>
<body>
	 <div>
            <nav class="navbar navbar-inverse navbar-fixed">
            <div class="topnav">
                 <div class="navbar-header">
               
                    <a class="navbar-brand" href="http://localhost:8383/AG%20Beyond/buyer.html"><span class="glyphicon glyphicon-globe"></span> &nbsp;AG Beyond</a>
                </div>
                <div class="top">
                    
                        <a href="http://localhost:8383/AG%20Beyond/logout.html"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
                        <a href="http://localhost:8383/AG%20Beyond/setting.html"><span class="glyphicon glyphicon-cog"></span> Settings</a>
			
                   
                </div>
            </div>
        </nav>
        </div>
		<div class="container">
	<?php 
		$username = "root"; 
		$password = ""; 
		$database = "blog"; 
		$mysqli = new mysqli("localhost", $username, $password, $database); 
		$query = "SELECT * FROM blog;";


		

		if ($result = $mysqli->query($query)) {
			while ($row = $result->fetch_assoc()) {
				$field1name = $row["head"];
				$field2name = $row["comments"];
				$field3name = $row["uid"];

				echo '<h3>'.$field1name.':</h3>
				<p>'.$field2name.'</p>
				<h5>'.$field3name.'</h5><br><br>';
			}
			$result->free();
		} 
	?>
	</div>
</body>
</html>