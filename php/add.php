<!DOCTYPE html>
<html>
    <head>
        <title>Add Crops | AG Beyond</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
		<style>
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
		</style>
    </head>
    <body>
		 <div>
            <nav class="navbar navbar-inverse navbar-fixed">
            <div class="topnav">
                 <div class="navbar-header">
               
                    <a class="navbar-brand" href="http://localhost:8383/AG%20Beyond/user.html"><span class="glyphicon glyphicon-globe"></span> &nbsp;AG Beyond</a>
                </div>
                <div class="top">
                    
                        <a href="http://localhost:8383/AG%20Beyond/logout.html"><span class="glyphicon glyphicon-log-out"></span> Log out</a>
                           
                </div>
            </div>
        </nav>
        </div>
		
       	<div id="content">
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>ADD CROP DETAILS</h4>
                            </div>
                            <div class="panel-body">
                                    <form action="includes/form.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="User Name" name="uid" required>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="District" name="district" required>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Crop Variety" name="crop" required>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Area in Hecters" name="area" required>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Harvest Month" name="hdate" required>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Contact Details" name="ph" required>
                                    </div>
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Farm Address" name="address" required>
                                    </div>
									<div class="form-group">
                                        <textarea type="text" class="form-control"  placeholder="Comment" name="comment"></textarea>
                                    </div>
                                    <button type="submit" name="submit" class="btn btn-primary">Add</button><br><br>
                                </form><br/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </body>
</html>
