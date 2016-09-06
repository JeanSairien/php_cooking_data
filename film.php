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
				echo "<li>".$top[$i]['im:releaseDate']['label']."</li>";
			}
				echo "</ol>";
	?>


	<p>rechercher la position de gravity</p>
	<?php 
	echo "<ol>";
		for($i = 1; $i < count($top); $i++){
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
				echo "<li>". $top[$i]['im:name']['label']."</li>" ;	
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
					
				count( array_push($old, $i));
				
					
			}
		}
			echo "</ol>" ;


			for($i = 0; $i < count($top); $i++){
			$release[$top[$i]['im:name']['label']] = $top[$i]['im:releaseDate']['label'];

			}
			echo array_search(min($release), $release). "est le film le plus vieux";
			
?>




<p>film le plus rescent </p>
		<?php
			for($i = 0; $i < count($top); $i++){
			$release[$top[$i]['im:name']['label']] = $top[$i]['im:releaseDate']['label'];


		}
			echo array_search(max($release), $release)." est le film le plus rescent ";
			
	?>

	<p>categorie la plus presente bitch !! </p>
		<?php
		 $cat= [] ;
			echo "<ol>" ;
			for($i = 0 ; $i < count($top) ; $i++) {
			 	array_push($cat, $top[$i]['category']['attributes']['label']);	
			  }
				print_r(array_count_values($cat)) ;
			
				echo "</ol>" ;

				echo array_search(max(array_count_values($cat)), array_count_values($cat))."est la categorie la plus presente biatch" ;

		?>



	</pre>
	 
		

</body>
</html> 