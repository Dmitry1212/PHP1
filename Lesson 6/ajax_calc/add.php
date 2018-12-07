<?php

    $operand1 = (int)$_POST['operand1'];
    $operand2 = (int)$_POST['operand2'];


	
	$summ=$operand1+$operand2;

	
	$response['result'] = $summ;
	echo json_encode($response);