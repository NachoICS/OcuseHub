<?php

$aero= new aeropuerto();
foreach ( $aero->get () as $row ) {
	// 								$provincia= new provincia();
	// 							$provincia->where('id',$row->provincia_id)->get();
	// 									echo '<option value="nombre_ciudad">' . $row->nombre_ciudad.','.$provincia->nombre_provincia.'</option>';
		
	//echo '<option value="nombre_ciudad">' .$row->provincia->nombre_provincia.'</option>';
	$row->ciudad->get()->nombre_ciudad;
	echo $row->check_last_query();
	
	
	//echo $ciu->check_last_query();


}
?>