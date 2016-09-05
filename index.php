<?php
$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
$dico = explode("\n", $string);
$compteur = 0;            





foreach( $dico as $string => $value ){
   $compteur++;

  	}
  	
		$mot= array() ;
		foreach ($dico as $caractere ) {
				if(strlen($caractere)== 15){
					array_push( $mot, $caractere);

				}
			}	
			$motw = array();
		foreach ($dico as $motDudico ){ 
			 if (preg_match("/^w.*$/",$motDudico)) {
          			array_push($motw, $motDudico);
    		  }
    		}

				$motq = array();
    		foreach ($dico as $caractere ){ 
			 if (preg_match("/^q.*$/\z",$caractere)) {
          			array_push($motq, $caractere);
          			
    		  }
    		}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Dico</title>
</head>
<body>

<h1>Dico</h1>

	<h2>Le dico comporte<?php echo ' '.$compteur ?> entréés</h2>

	<h2> il y as  <?php echo ' '.count($mot) ?>mots de 15 lettre dans ce dico</h2>

	<h2>il y as <?php print_r (count($motw)) ?> qui contienne un W</h2>

	<h2>il y as <?php print_r(count($motq)) ?> qui contienne un Q</h2>

</body>
</html>


