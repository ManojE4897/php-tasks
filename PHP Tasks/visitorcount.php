<!DOCTYPE html>

<html>
<head>
	<title>My website</title>
</head>


<body bgcolor = "#99CC99" >

	<?php 
			include "conn.php";

			$handle = fopen("counter.txt", "r");

			if(!$handle)
			{
			 echo "could not open the file" ;
			}

			else
			{
				$counter = ( int ) fread ($handle,20) ;
				fclose ($handle) ;
				$counter++ ;
				echo" <h1><strong> You are visitor no ".  $counter . "</h1></strong >" ;

					$handle =  fopen("counter.txt", "w" ) ;
					fwrite($handle,$counter) ;
					fclose ($handle) ;
			}
	?>


<h3>This is my website</h3>
 <h4>Refresh the page to increase the visitor count</h4>
 </body>
</html >


