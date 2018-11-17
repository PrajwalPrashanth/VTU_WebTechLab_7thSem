<?php
header('Content-Type: text/plain');
$matrix1 = array( 
array(1, 2), 
array(4, 5), 
array(7, 8) 
); 
$matrix2 = array( 
array(1, 2), 
array(4, 5) 

); 
$rowCount1 = count($matrix1);
$colCount1 = count($matrix1[0]); 

$rowCount2 = count($matrix2);
$colCount2 = count($matrix2[0]);

echo "MULTIPLICATION\n";

if($colCount1!=$rowCount2)
{
	echo "\n error \n";
}
else
{
$res = [];
for ($i=0; $i < $rowCount1 ; $i++) 
{ 
	for ($j=0; $j < $colCount2 ; $j++)
	{ 
		$sum = 0;
		for ($k=0; $k < $colCount1 ; $k++) 
		{		 
			$sum = $sum + $matrix1[$i][$k]*$matrix2[$k][$j];
		}
		$res[$i][$j] = $sum;
	}
}

for ($i=0; $i < $rowCount1 ; $i++) 
{ 
	for ($j=0; $j < $colCount1 ; $j++)
	{ 
		echo $matrix1[$i][$j]."\t";
	}
	echo "\n";
}

for ($i=0; $i < $rowCount2 ; $i++) 
{ 
	for ($j=0; $j < $colCount2 ; $j++)
	{ 
		echo $matrix2[$i][$j]."\t";
	}
	echo "\n";
}

for ($i=0; $i < $rowCount1 ; $i++) 
{ 
	for ($j=0; $j < $colCount2 ; $j++)
	{ 
		echo $res[$i][$j]."\t";
	}
	echo "\n";
}
}

?>
