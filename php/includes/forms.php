<?php
		include_once 'dbhs.php';
		
		$uid = $_POST['uid'];
		$head = $_POST['head'];
		$comments = $_POST['comments'];
		
        $sql = "INSERT INTO blog (uid, head, comments) 
				VALUES ('$uid', '$head', '$comments');";
		mysqli_query($conn, $sql);
		

		header("Location:../blogs.php?added=success");