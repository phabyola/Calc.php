<pre><?php

	include 'calc.php';
	
	if (soma (5, 2) == 5 + 2 )
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (subtracao(5, 2) == 5 - 2 )
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (divisao (5, 2) == 5 / 2 )
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (multiplicacao (5, 2) == 5 * 2 )
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (soma (5, multiplicacao (2, 3)) == 5 + (2 * 3))
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (soma (subtracao (8, 3), 5 + 8 - 3) )
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
	if (soma (divisao (9, 3), multiplicacao (4, 2)))
		echo 'Ok<br>';
	else
		echo 'Erro<br>';
		
			 
	
		

?> </pre>