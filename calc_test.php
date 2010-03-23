<?php

	include 'calc.php';
	
		echo soma (5, 2),  '<br>'; 
	
		echo subtracao(5, 2),  '<br>'; 
	
		echo divisao (5, 2),  '<br>'; 
	
		echo multiplicacao (5, 2), '<br>';
	
		echo soma (5, multiplicacao (2, 3)), '<br>';
	
		echo soma (subtracao (8, 3), 5), '<br>';
	
		echo soma (divisao (9, 3), multiplicacao (4, 2)), '<br>';


?>