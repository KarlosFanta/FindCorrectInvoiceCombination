<?php 
    function findcombinations($array)
	{
		$results = array(array( ));

	    foreach ($array as $element)
        {
            if($element>0)
            {
                foreach ($results as $combination)
	                array_push($results, array_merge(array($element), $combination));
            }
        }
	        

	    return $results;
	}

    $Tot = $_POST['Tot'];
    //$in = $_POST['in']; //for loop amounts
    $ma = array();
    $R1 = $_POST['R1'];
    
    $R2 = $_POST['R2'];
    $R3 = $_POST['R3'];
    $R4 = $_POST['R4'];
    $R5 = $_POST['R5'];
    $R6 = $_POST['R6'];
    $R7 = $_POST['R7'];
    $R8 = $_POST['R8'];
    $R9 = $_POST['R9'];
    $R10 = $_POST['R10'];
    echo "<br>Tot: $Tot";
    //echo "<br>in: $in<br>";
    echo "<br>R1: $R1";
    echo "<br>R2: $R2";
    echo "<br>R3: $R3";
    echo "<br>R4: $R4";
    echo "<br>R5: $R5";
    echo "<br>R6: $R6";
    echo "<br>R7: $R7";
    echo "<br>R8: $R8";
    echo "<br>R9: $R9";
    echo "<br>R10: $R10<br><br>";
    $ma = [$R1, $R2, $R3, $R4, $R5, $R6, $R7, $R8, $R9, $R10 ];

    //var_dump($ma);

    $combinations = findcombinations($ma);
    
	foreach($combinations as $thiscombination)
	{
		if(array_sum($thiscombination)==$Tot)
		{
        	var_dump($thiscombination);
        
		}
	}

?>
