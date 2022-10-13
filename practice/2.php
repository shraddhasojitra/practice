<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table border="1" bgcolor="gray">
	<?php

        $start  = 1;
        $end = 10;
		echo("<tr><th></th>");
		for($i = $start; $i <= $end; $i++) 
		echo("<th>".$i."</th>");
	    echo("</tr>");
		
		for($i = $start; $i <= $end; $i++) 
		{
		  echo("<tr><th>".$i."</th>");
		  for($j = $start; $j <= $end; $j++) 
		  {
			$result = $i / $j; 
			printf("<td>%.3f</td>", $result);
		  }
		  echo("</tr> \n");
		}	
        

	?>
	</table>    
</body>
</html>
