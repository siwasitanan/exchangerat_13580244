<!DOCTYPE html>
<html>
<head>
	<title>Calculator</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



</head>
<body>

	<div class="navbar">
	<h3>Exchange Rate</h3>
	</div>


	<center>
		<div class="container">
		<br>
	<form action="calculate-result.php" method="post">
		<div class="input selectpicker">
			<label>จำนวนเงินไทย</label>
		  <input type="number" name="thb" class="input-group-text" placeholder="จำนวนเงินไทย">
  		<br>
		</div>
		<label>สกุลเงินที่ท่านต้องการคำนวณ</label>
		<select name="type">
			<option value="usd"> USD </option>
			<option value="jyp"> JYP </option>
			<option value="krw"> KRW </option>
			<option value="gbp"> GBP </option>
			<option value="eur"> EUR </option>
		</select>
		
		<br>
		<br>
		<button type="submit" class="btn btn-secondary">Calculate</button>
		<br>
		<br>


	</form>
		</div>
	</center>
	<style> 
	.container{
		background-color: #cccccc;
	}
	
	.navbar{
		background-color: #152D38;	

	}
	h3{
		color:#FFFFFF;
	}
	




	</style>

</body>
</html>