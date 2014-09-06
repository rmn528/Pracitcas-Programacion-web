<?php
	function tablas($noTablas,$inicio,$until){
		for($i=1;$i<=$noTablas;$i++,$inicio++){
			for($j=1;$j<=$until;$j++){
				echo $inicio.'X'.$j.'='.$inicio*$j.'<br/>';
			}
			echo '<br/>';
		}
	}
	
	$noTablas=(isset($_GET['noTablas']) && $_GET['noTablas']!=NULL)?$_GET['noTablas']:10;
	$inicio=(isset($_GET['inicio']) && $_GET['inicio']!=NULL)?$_GET['inicio']:1;
	$until=(isset($_GET['until']) && $_GET['until']!=NULL)?$_GET['until']:12;
	
	tablas($noTablas,$inicio,$until);
?>