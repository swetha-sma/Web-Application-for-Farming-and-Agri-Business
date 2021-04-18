<!DOCTYPE html>
<html>
    <head>
        <title>Blogs | AG Beyond</title>
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
                        <a href="http://localhost:8383/AG%20Beyond/Settings.html"><span class="glyphicon glyphicon-cog"></span> Settings</a>
			<a href="http://localhost/phplessons/add.php" class="active"><span class="glyphicon glyphicon-grain"></span>  Add Crop</a>
                   
                </div>
            </div>
        </nav>
        </div>
		
       	<div id="content">
		<a  href="http://localhost/phplessons/dis.php" class="btn btn-danger btn-lg active">View other Blogs</a>
            <div class="container-fluid decor_bg" id="login-panel">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4">
                        <div class="panel panel-primary" >
                            <div class="panel-heading">
                                <h4>Post Your views as Blog here!</h4>
                            </div>
							
                            <div class="panel-body">
                                    <form action="includes/forms.php" method="POST">
                                    <div class="form-group">
                                        <input type="text" class="form-control"  placeholder="User Name" name="uid" required>
                                    </div>
									
									<div class="form-group">
                                        <input type="text" class="form-control"  placeholder="Title" name="head" required>
                                    </div>
                                    
									<div class="form-group">
                                        <textarea rows="20"  type="text" class="form-control"  placeholder="Comment" name="comments"></textarea>
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
