<!DOCTYPE html>
<html>
<head>
	<title>Membuat Kalkulator Sederhana Dengan Javascript | www.abdulhafizh.com</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<div class="container">
	<div class="row">
		<div class="card text-center">
		  <div class="card-body">
		  	<form name="hitung">
		  		<span class="float-left ab"><a href="https://www.abdulhafizh.com" target="_blank">abdulhafizh.com</a></span>
		  		<span class="float-right" onclick="window.location.reload(true);"><ion-icon name="refresh"></ion-icon></span>
			  	<input class="form-control form-control-lg" type="text" name="hasil" placeholder="0" readonly>
			  	<table>
			  		<tr>
			  			<td><input type="button" class="btn btn-light" value="7" onclick="hitung.hasil.value += '7'"></td>
			  			<td><input type="button" class="btn btn-light" value="8" onclick="hitung.hasil.value += '8'"></td>
			  			<td><input type="button" class="btn btn-light" value="9" onclick="hitung.hasil.value += '9'"></td>
			  			<td><input type="button" class="btn btn-dark" value="/" onclick="hitung.hasil.value += ' / '"></td>
			  		</tr>
			  		<tr>
			  			<td><input type="button" class="btn btn-light" value="4" onclick="hitung.hasil.value += '4'"></td>
			  			<td><input type="button" class="btn btn-light" value="5" onclick="hitung.hasil.value += '5'"></td>
			  			<td><input type="button" class="btn btn-light" value="6" onclick="hitung.hasil.value += '6'"></td>
			  			<td><input type="button" class="btn btn-dark" value="x" onclick="hitung.hasil.value += ' * '"></td>
			  		</tr>
			  		<tr>
			  			<td><input type="button" class="btn btn-light" value="1" onclick="hitung.hasil.value += '1'"></td>
			  			<td><input type="button" class="btn btn-light" value="2" onclick="hitung.hasil.value += '2'"></td>
			  			<td><input type="button" class="btn btn-light" value="3" onclick="hitung.hasil.value += '3'"></td>
			  			<td><input type="button" class="btn btn-dark" value="-" onclick="hitung.hasil.value += ' - '"></td>
			  		</tr>
			  		<tr>
			  			<td><input type="button" class="btn btn-light" value="0" onclick="hitung.hasil.value += '0'"></td>
			  			<td><input type="button" class="btn btn-light" value="." onclick="hitung.hasil.value += '.'"></td>
			  			<td><input type="button" class="btn btn-primary" value="=" onclick="hitung.hasil.value = hitung.hasil.value + ' = ' +eval(hitung.hasil.value)"></td>
			  			<td><input type="button" class="btn btn-dark" value="+" onclick="hitung.hasil.value += ' + '"></td>
			  		</tr>
			  	</table>	
		  	</form>			    				    
		  </div>
		</div>
	</div>
</div>
<script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>
</body>
</html>