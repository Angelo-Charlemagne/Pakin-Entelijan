<?php
	//Methode pour etablir la connection avec arduino via le port Serie (COMX)
	function connectCom($device='COM6') {
		exec("mode $device BAUD=38400 PARITY=1 DATA=8 STOP=n xon=on octs=off rts=on");
		$comport=@fopen($device, "wb+");
		if ($comport) {
			fputs($comport,"\n\n");
			usleep(300000);
			$result=fgets($comport);
		} 
		else {
			die("erreur port ".$device);
		}
		return $comport;
	}

	//Methode pour fermer la connection avec le port Serie(COMX)
	function closeCom($handle) {
		if ($handle!=null) {
			fclose($handle);
		}
	}
	//Methode pour reccuperer les donnees arduino via le port Serie
	function getArduino(){
		$handle=connectCom();
		$result=utf8_encode(fgets($handle));
		return $result;
	}
	// Methode pour transmettre un ou plusieurs mots a arduino
	function sendArduino($text { 
		$handle=connectCom();
		
		fputs($handle,$text."\n");
		//usleep(300000);
		//$result=utf8_encode(fgets($handle));
		closeCom($handle);
		return $result;
	}
	
	//Methode qui calcule et fournit la duree du garage en seconde.
	function dureeGarage(){
		$time=time_end()-time_start();
		return $time;
	} 
	// Le chronometre
	function chronometre(){
		list($usec,$sec)=explode(" ",microtime());
		return((float)$usec + (float)$sec);
	}
	//Methode pour demarrer le chronometre
	function time_start(){
		return $time_start=chronometre();
	}
	//Methode pour arreter le chronometre
	function time_end(){
		return $time_end=chronometre();
	}
	
	//Methode pour calculer la facture en Gourdes
	function facture($duree){
		$minutes=$duree/60; //Calcule de la dureen en minute
		$montant=1*$minutes;
		return $montant;
	}
?>