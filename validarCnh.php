<?php
    function validarNumeroCnh($cnh){
		for ($i = 0; $i < strlen($cnh); $i++) {
			$caracteresCnh[] = intval($cnh[$i]);
		}

		$decremento = 9;
		$digitoVerificador1 = 0;
		$digitoVerificador2 = 0;
		
		for ($i = 0; $i < 9; $i++) {
			$caracteres = $caracteresCnh[$i];
			$digitoVerificador1 += $caracteres* $decremento;
			$decremento--;
		}
	
		if(($digitoVerificador1 % 11) <= 9){
			$digitoVerificador1 = $digitoVerificador1 % 11 ;
		}else{
			$digitoVerificador1 = 0;
		}

		for ($i = 0; $i < 11; $i++) {
			$digitoVerificador2 += $caracteresCnh[$i];
			}

		$soma = $digitoVerificador2 % 11;

		if($caracteresCnh[9] == $digitoVerificador1 and $soma == 0){
				return true;
        }
		else{
			return false;
		}
    }
?>