  <?php
 
 		function fruit($tab)  {
     
    		$index=count($tab)-2;
     	
     		$result=[] ;
     
    	while ($index<count($tab)) {
     
    	array_push($result,$tab[$index]);
     
     	$index++; }
     
     	return $result; }

     	echo"Les deux derniers fruits sont :\n";
    
    	print_r(fruit($fruits));
  
	?>