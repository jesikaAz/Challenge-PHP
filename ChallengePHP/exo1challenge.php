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

?>