<?php
      include_once('db.php');
 
	  $username = mysql_real_escape_string( $_POST["username"] );
	  $password = mysql_real_escape_string( $_POST["pass"] );
	  $fname = mysql_real_escape_string( $_POST["fname"] );
	  $lname = mysql_real_escape_string( $_POST["lname"] );
	  $phone = mysql_real_escape_string( $_POST["phone"] );
 
 
	  if( empty($username) || empty($password) )
	  {
	  	echo "Username and Password are mandatory - from PHP!";
		exit();
	  }
 
 
 $res = mysql_query("SELECT userEmail FROM userRecord WHERE userEmail='$username'");
	  $row = mysql_fetch_row($res);
 
	  if( $row > 0 )
	    echo "Username $username has already been taken";
	  else
	  {
	   	  $sql = "INSERT INTO UserRecord VALUES(
											userID,
											'$fname',
											'$lname',
											'$username', 
                                           '$password',
										   '$phone'
										   )";
	    if( mysql_query($sql) )
	     echo "Inserted Successfully";
	   else
	     echo "Insertion Failed";
	}
?>