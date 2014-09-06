<?php
	class ClaseTabla{
		private $noTablas,$inicio,$until;
		
		public function __construct($noTablas,$inicio,$until){
			$this->noTablas=$noTablas;
			$this->inicio=$inicio;
			$this->until=$until;
		}
		
		public function tablas(){
			for($i=1;$i<=$this->noTablas;$i++,$this->inicio++){
				for($j=1;$j<=$this->until;$j++){
					echo $this->inicio.'X'.$j.'='.$this->inicio*$j.'<br/>';
				}
				echo '<br/>';
			}
		}
	}
	
	$noTablas=(isset($_GET['noTablas']) && $_GET['noTablas']!=NULL)?$_GET['noTablas']:10;
	$inicio=(isset($_GET['inicio']) && $_GET['inicio']!=NULL)?$_GET['inicio']:1;
	$until=(isset($_GET['until']) && $_GET['until']!=NULL)?$_GET['until']:12;
	
	$tablas=new ClaseTabla($noTablas,$inicio,$until);
	$tablas->tablas();
?>