<?php
      include_once('db.php');
 
 	  $userLogin = mysql_real_escape_string( $_POST["userLogin"] );
	  $dogName = mysql_real_escape_string( $_POST["dogName"] );
	  $dBreed = mysql_real_escape_string( $_POST["dBreed"] );
	  $dSize = mysql_real_escape_string( $_POST["dSize"] );
	  $dGender = mysql_real_escape_string( $_POST["dGender"] );
	  $dAge = mysql_real_escape_string( $_POST["dAge"] );
	  $dRodowod = mysql_real_escape_string( $_POST["dRodowod"] );
	  $imgUrl = mysql_real_escape_string( $_POST["imgUrl"] );
	  $dDescription = mysql_real_escape_string( $_POST["dDescription"] );
	  $searchFor = mysql_real_escape_string( $_POST["searchFor"] );
	  $puppies = mysql_real_escape_string( $_POST["puppies"] );
	  $ownerName = mysql_real_escape_string( $_POST["ownerName"] );
	  $ownerNumber = mysql_real_escape_string( $_POST["ownerNumber"] );

	  
	  $userId = mysql_query("SELECT userID FROM UserRecord WHERE userEmail='$userLogin'");

	   	  $sql = "INSERT INTO DogRecord VALUES(dogID,
	   	  	'1',
	   	  	'$dogName',
	   	  	'$dBreed',
	   	  	'$dSize', 
	   	  	'$dGender',
	   	  	'$dAge',
	   	  	'$dRodowod',
	   	  	'$imgUrl',
	   	  	'$dDescription',
	   	  	'$searchFor',
	   	  	'$puppies',
	   	  	'$ownerName',
	   	  	'$ownerNumber')";

	    if( mysql_query($sql) )
			//header('Location: http://dogmeet.prv.pl/dogsite/gonext.html');
	     echo "Dog record was created";
	   else
	     echo "Creation failed. Please check the data";
	
?>