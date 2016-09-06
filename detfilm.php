<?php 
	
$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films










?>


<!DOCTYPE html>
<html>
<head>
	<title>film</title>
</head>
<body>
<h1>Le top10 des films</h1>

	<pre>
	<p>afficher le top 10</p>

	
	
	
	<?php 
		
		 echo "<ol>";
		
			foreach ($top as $key => $value) {
				if($top[$key]['rights']['label'] <= "2000")
				echo "<li>".$value['rights']['label']."</li>";
				# code...
			}
			
				echo "</ol>";
	?>
	<?php 

	print_r($top) ;


	?>


	
	
	
	</pre>
	 
		

</body>
</html> 