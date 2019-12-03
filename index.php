<?php 
	include ('config/database.php');

	$controller = filter_input(INPUT_POST, 'controller');
	if(empty($controller)){
		$controller = filter_input(INPUT_GET, 'controller');
		if(empty($controller)){
			$controller = 'c_book';
		}
	}

	switch ($controller) {
		case 'c_book':
			include('controller/c_book.php');
			break;
		case 'c_student':
			include('controller/c_student.php');	
			break;	
		case 'c_receipts':
			include('controller/c_receipts.php');	
			break;	

		default:
			# code...
			break;
	}

 ?>