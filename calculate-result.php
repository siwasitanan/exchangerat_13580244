<?php

	$thb=$_POST['thb'];
	$type=$_POST['type'];
	$result;
	


	 if ($type=="usd") {
	  $result = $thb / 31.2273; 
	 } elseif ($type=="jyp") {
	  $result = $thb / 28.9814; 
	 } elseif ($type=="krw") {
	  $result = $thb / 0.0290; 
	 } elseif ($type=="gbp") {
	  $result = $thb / 43.3292; 
	 } elseif ($type=="eur") {
	  $result = $thb / 38.2737; 
	 }

	require 'connect.php';
	 $sql = "INSERT INTO exch442_history(thb,calculated,currency) VALUES($thb,$result,'$type')";
	 $sql_exe=$conn -> query($sql);
	




	//แบบที่2 

	// if($type == "usd"){
	// 	$rate = 0.31;
	// }elseif ($type=="jyp") {
	// 	$rate = 0.21;
	// }elseif ($type=="krw") {
	// 	$rate = 0.11;
	// }elseif ($type=="gbp") {
	// 	$rate = 0.58;
	// }elseif ($type=="eru") {
	// 	$rate = 0.40;
	// }
	// echo "Result=".thb * rate;

	// //แบบที่3
	// switch ($type) {
	// 	case 'usd':
	// 		rate = 0.31;
	// 		break;
	// 	case 'jyp':
	// 		rate = 0.21;
	// 		break;
	// 	case 'krw':
	// 		rate = 0.11;
	// 		break;
	// 	case 'gbp':
	// 		rate = 0.58;
	// 		break;
	// 	case 'eru':
	// 		rate = 0.40;
	// 		break;	
		
	// 	default:
	// 		$rate=0;
	// 		break;
	// }
	// echo "Result=".thb * rate;

	?>

<!DOCTYPE html>
<html>
	<head>
		<title>Result</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	</head>
	<body>

	<div class="container">
		<center>
		<div class="row">
			
				<div class="navbar">
					<h5>

				<?php 
					echo "<div class='form-group'>";
					echo "<br>";
					echo "จำนวนเงิน : ".$thb;
					echo "<br>";
					echo "สกุลเงินที่ใช้คำนวณ : ".$type;
					echo "<br>";
					echo "คำนวณได้ = ".$result;
					echo "</div>";
					

						$sql = "SELECT * FROM exch442_history ORDER BY dateRecord DESC";
						$sql_exe = $conn -> query($sql);
				?>
					</h5>
			</div>
		</div>
		</center>
		<table class="table table-striped table-hover">
				<br>
				<br>
			<thead>
				<tr>
					<th class="text-center" colspan="5">ประวัติการคำนวณ</th>
				</tr>
				<tr>
					<th>จำนวนเงิน(บาท)</th>
					<th>สกุลเงิน</th>
					<th>คำนวณได้</th>
					<th>วันที่และเวลาที่คำนวณ</th>
					<th>ลบข้อมูล</th>
				</tr>
			</thead>

		<?php 
			while ($row = mysqli_fetch_assoc($sql_exe)) {
				     // $array['key/field name'];
				echo "<tr>
				     <td>".$row['thb']."</td>
					 <td>"." exchage to ".$row['currency']."</td>
					 <td>".$row['calculated']."</td>
					 <td>".$row['dateRecord']."</td>";
		?>
		<td><a class="btn btn-outline-danger"  href="delete.php?id=<?php echo $row['recordID']?> &thb=<?php echo $row['thb'] ?>">Delete</a></td>
		</tr>
		<?php
			}
			$conn->close();
		?>
		</table>
		</div>
		

		<style>
			.container{
				background-color: #F9F8F8;
				color: #000000;	
			}
			
			.navbar{
				background-color: #333333;
				color: #ffffff;	
				font-family: arial;

			}
			hr{
				color: #ffffff;
			}
			.row{	
				text-align: left;
				background-color: #333333;	

			}


		</style>
	</body>
</html>