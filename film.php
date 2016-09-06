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
		for($i=0;$i < 10;$i++) {
			

				echo "<li>".$top[$i]['im:name']['label']."</li>";
			}
				echo "</ol>";
	?>
	<p>rechercher la position de gravity</p>
	<?php 
	echo "<ol>";
		for($i = 0; $i < count($top); $i++){
			if($top[$i-1]['im:name']['label'] == "Gravity")
				echo "<li>". $i ."</li>" ;		
		}
			echo "</ol>" ;

	?>
	<p>rechercher le realisateur de lego movies</p>
	
	<?php 
	echo "<ol>";
		for($i = 0; $i < count($top); $i++){
			if($top[$i]['im:name']['label'] == "The LEGO Movie")
				echo "<li>". $top[$i]['im:artist']['label'] ."</li>" ;		
		}
			echo "</ol></br>" ;
	?>
		

	<p>Les films sortit avant 2000</p>
	<?php
		echo "<ol>";
		for($i = 0; $i < count($top); $i++){
			if($top[$i]['im:releaseDate']['label'] <= "2000"){
				echo "<li>". $top[$i]['im:releaseDate']['label'] ."</li>" ;		
			}
		}
			echo "</ol>" ;
	?>
	
	<p>Le film le plus vieux  </p>
	<?php
		$old =array();
		echo "<ol>";
		for($i = 0; $i < 100; $i++){
			if($top[$i]['im:releaseDate']['label'] <= "2000"){
				echo "<li>". $top[$i]['im:releaseDate']['label'] ." est l'année du film le plus vieux"."</li>" ;	
				array_push($old, $top[$i]['im:releaseDate']['label']);
				
					
			}
		}
			echo "</ol>" ;
			echo $old ;

	?>



	</pre>
	 
		

</body>
</html> 