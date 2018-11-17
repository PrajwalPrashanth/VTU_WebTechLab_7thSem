<?php 
header('Content-Type: text/plain'); //withput this header "\t and \n" wont work 
// transpose matrix 
$matrix1 = array( 
	array(1, 2), 
	array(4, 5), 
	array(7, 8) 
); 
$matrix2 = array( 
	array(1, 2), 
	array(4, 5), 
	array(7, 8) 
); 

$rowCount= count($matrix1); //Provides the rowcount of matrix 
$colCount = count($matrix1[0]); //Provides the column count of matrix 

echo "The first input matrix is:\n"; 
for($r = 0; $r < $rowCount; $r++){ 
	for($c=0; $c < $colCount; $c++) 
		echo $matrix1[$r][$c]." \t"; 
	echo "\n"; 
} 

$rowCount= count($matrix2); //Provides the rowcount of matrix 
$colCount = count($matrix2[0]); //Provides the column count of matrix 

echo "\nThe second input matrix is:\n"; 
for($r = 0; $r < $rowCount; $r++) 
{ 
	for($c=0; $c < $colCount; $c++) 
		echo $matrix2 [$r][$c]." \t"; 
	echo "\n"; 
} 

if(count($matrix1)==count($matrix2) && count($matrix1[0])==count($matrix2[0])){
//The sum of the matrix 
	echo "\nThe sum of matrix is:\n"; 
	for($r = 0; $r < $rowCount; $r++) { 
		for($c=0; $c < $colCount; $c++) 
			{ 
				$val= $matrix1[$r][$c] + $matrix2[$r][$c]; 
				echo $val."\t"; 
			} 
			echo "\n"; 
		}
	}
	else
		echo "Addition not possible";
?>