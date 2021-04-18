<?php
		include_once 'dbh.php';
		
		$uid = $_POST['uid'];
		$district = $_POST['district'];
		$crop = $_POST['crop'];
		$area = $_POST['area'];
		$hdate = $_POST['hdate'];
		$ph = $_POST['ph'];
		$address = $_POST['address'];
		$comment = $_POST['comment'];
		
        $sql = "INSERT INTO addcrop (uid, district, crop, area, hdate, ph, address, comment) 
				VALUES ('$uid','$district','$crop','$area', '$hdate', '$ph', '$address', '$comment');";
		mysqli_query($conn, $sql);
		

		header("Location:../add.php?added=success");