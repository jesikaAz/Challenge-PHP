
	 <?php 

		function commandes($tab1, $tab2){
  			$result = [];
	
    		foreach($tab1 as $value1){
	    		foreach ($tab2 as $value2) {
	    		array_push($result,"Le " .$value2." est ".$value1);
    			}
			}
		return $result;
			}

		print_r(commandes($cuissons,$viandes));
	?>

  
    
    <?php 

        $genres="horreur fantastique action western thriller comédie drame romande historique"; <br>
    
        function exploder($array) {
            echo "Le genre est:";
            print_r (explode(" ",$array));
        } <br>

        exploder($genres);

    ?>
        
        
    <?php
 
		$fruits = array ('banane', 'pomme', 'fraise', 'framboise','tomate', 'noix de coco', 'ananas'); 
 
 		function fruit($tab)  {
     
    		$index=count($tab)-2;
     	
     		$result=[] ;
     
    	while ($index<count($tab)) {
     
    	array_push($result,$tab[$index]);
     
     	$index++; }
     
     	return $result; }

     	echo"Les deux derniers fruits sont :\n";
    
    	print_r(fruit ($fruits));
  
	?>
   
            
    <?php
 
 			$input = array("Harry", "Hilary", "Harrington", "Hagrid","Holmes"); 
 
 			function output ($tab) {
    		 $i=count($tab)/2;
    		unset($tab[$i]);
     		return $tab;
 			}
        
        	echo"Les meilleurs prénoms sont :\n";

            print_r(output($input));
	?>
    
    