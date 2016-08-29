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
				$prix= [] ;
			for($i = 0 ; $i < 100 ; $i++) {
			 	array_push($prix, $top[$i]['im:price']['label']);
			 		if($prix['im:price']['label'] <= "$9.99");
			 			return array_push($prix, $top[$i]);	 
			 			}	
			 		
			 		
				
				echo "<li>".$top[$i]['im:releaseDate']['label']."</li>";
				echo "</br>" ;
				
				echo "<li>".$prix[$j]['im:price']['label']."</li>";
				print_r(array_count_values($top));
				
				print_r(array_count_values($prix)) ;
				print_r(array_sum($prix));
					print_r($prix) ;		
			  		

			
			
				echo "</ol>";
	?>
	
	














	
	
	
	</pre>
	 
		

</body>
</html> 