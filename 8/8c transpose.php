<?php 
header('Content-Type: text/plain'); //withput this header "\t and \n" wont work 
// transpose matrix 
$matrix1 = array( 
	array(1, 2), 
	array(4, 5), 
	array(7, 8) 
); 

$rowCount= count($matrix1); //Provides the rowcount of matrix 
$colCount = count($matrix1[0]); //Provides the column count of matrix 

echo "The input matrix is:\n"; 
for($r = 0; $r < $rowCount; $r++){ 
	for($c=0; $c < $colCount; $c++) 
		echo $matrix1[$r][$c]." \t"; 
	echo "\n"; 
} 

echo "The transpose matrix is:\n"; 
for($c = 0; $c < $colCount; $c++){ 
	for($r=0; $r < $rowCount; $r++) 
		echo $matrix1[$r][$c]." \t"; 
	echo "\n"; 
}