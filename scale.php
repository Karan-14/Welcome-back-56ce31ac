<?php	

	$links = 7;	
	$rechts = 5;
	$verschil = $links - $rechts;

	$gewicht = array(1,2,3,4,5);

	foreach ($gewicht as $value) {

		if ($value == $verschil) {
			echo "er is balans";
		}
	}



/*if ($links == $rechts) {	
		echo "in balans";
}
elseif ($links > $rechts) {	
		echo "niet in balans";
}*/