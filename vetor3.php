<?php

	$cores = array(
						0 => "blue", 
						1 => "red",
						2 => "green"
						);
						
	echo "<pre>";
		var_dump($cores);
	echo "</pre>";			
?>
	
<p style = "color:
		<?php 
		echo $cores[1];
		?>
">Teste</p>
	