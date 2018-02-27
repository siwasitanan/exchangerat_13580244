<?php
	
	// if (@_SERVER['HTTP_HOST']=='localhost') {
		// $DB_SERVER = 'localhost';
		// $DB_USER_READER = 'sitanan';
		// $DB_PASS_READER = "MCYZn5XZvkda20z7";
		// $DB_NAME = 'db442_exchangerate';
		// blye4rZ6HuuhG4za
		// WvKdRf9fDuCgepvp
		// cL5lVETANALkjDH6
		// SLez5q5ki6n9FxSL
		
	// }else{
	// 	//บน sever imsu.co
		$DB_SERVER = 'localhost';
		$DB_USER_READER = 'u13580244';
		$DB_PASS_READER = 'BuS8AsNXKt';
		$DB_NAME = 'db13580244';
	// }
	//คำสั่งที่ใช้ต่อกับฐานข้อมูล
	$conn = new mysqli($DB_SERVER, $DB_USER_READER, $DB_PASS_READER, $DB_NAME);
	//ตรวจสอบว่าต่อสำเร็จหรือไม่
	if ($conn -> connect_error) {
		die("connection failed".$conn -> connect_error);
		
	}
	mysqli_set_charset($conn, "utf8");


?>