<?php
        include_once('db.php');
 
		$username = mysql_real_escape_string( $_POST["username"] );
		$password = mysql_real_escape_string( $_POST["password"] );
 
		if( empty($username) || empty($password) )
			echo "Username and Password Mandatory - from PHP";
		else
		{
		$sql = "SELECT count(*) FROM UserRecord WHERE(
		        userEmail='$username' 
				AND 
				userPassword='$password')";
 
 
	    $res = mysql_query($sql);
		$row = mysql_fetch_array($res);
		if( $row[0] > 0 )
		//ob_start(); // Starts Output Buffering 
		header('Location: http://dogmeet.prv.pl/dogsite/gonext.html');
		//echo "Login Successful";
		else
		 echo "Failed To Login";
   		}		
?>