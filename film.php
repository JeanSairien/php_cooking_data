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

	<?php 
		foreach ($top as $key => $value) {
			
		echo $value['im:name']['label'];
		}
			
		
		
	
	print_r($top)  ;

	?>

	</pre>

</body>
</html>