    <?php

 			function output ($tab) {
    		 $i=count($tab)/2;
    		unset($tab[$i]);
     		return $tab;
 			}
        
        	echo"Les meilleurs prénoms sont :\n";

            print_r(output($input));
	?>
    
    