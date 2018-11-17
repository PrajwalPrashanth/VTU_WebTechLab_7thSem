<?php
header('Content-Type: text/plain');
    $allTheStates = "Mississippi Alabama Texas Massachusetts Kansas";
    $statesArray = [];
    $states1 = explode(' ',$allTheStates);

		$i = 0;
		//states that ends in xas
		foreach($states1 as $state) {
			if(preg_match( '/xas$/', ($state)))
			{	$statesArray[$i] = ($state);
				$i = $i + 1;
				print "\nThe words that end in xas: " . $state;
			}
		}
		
		//states that begins with k and ends in s
		foreach($states1 as $state)
		{
			if(preg_match('/^[Kk].*[sS]$/i', ($state)))
			{   $statesArray[$i] = ($state);
			    $i = $i + 1;
				echo "\nThe words that begin with k ans end in s: " . $state;
			}
		}
		
		//states that begins with M and ends in s
		foreach($states1 as $state) {
			if(preg_match('/^M.*s$/', ($state)))
			{	$statesArray[$i] = ($state);
				$i = $i + 1;
				echo "\nThe words that begin with M and end in s: " . $state;
			}
		}
		
		//states that ends in a
		foreach($states1 as $state) {
			if(preg_match('/a$/', ($state)))
			{	$statesArray[$i] = ($state);
				$i = $i + 1;
				echo "\nThe words that end in a: " . $state;
			}
		}
	//}
	print ("\n\nVariable states array");
	
	foreach( $statesArray as $element => $value ){
	print( "\nElement ".$element ." : " . $value);
    }
 ?>
