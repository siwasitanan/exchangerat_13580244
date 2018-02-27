<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <center>
		<div class="container navbar">
			<?php
				require 'connect.php';

				$id = $_REQUEST['id'];
				$thb = $_REQUEST['thb'];
				$sql = "DELETE FROM exch442_history WHERE recordID = $id";

				$sql_exe = $conn -> query($sql);


				if($sql_exe) {

					echo "ลบข้อมูลสำเร็จ! "; 
					echo "<br>";
					echo "ลำดับที่ลบ คือ  ".$id;
					echo "<br>";
					echo " จำนวนเงิน = ".$thb;
					//header("location:index.php",2);
				}else{
					echo " Deletae failed";
				}
			?>
		</div>
	</center>
		<style>
			.container{
				margin-top: 10px;
				background-color: #F9F8F8;
				color: #000000;	

			}
			.navbar{
				background-color: #333333;
				color: #ffffff;	
				font-family: arial;
				text-align: left;
			}		
		</style>
</body>
</html>