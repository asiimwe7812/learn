

<?php
$fullname = filter_input(INPUT_POST,'fullname');
$regno = filter_input(INPUT_POST,'regno');
$phoneno = filter_input(INPUT_POST,'phoneno');
$email = filter_input(INPUT_POST,'email');
$faculty = filter_input(INPUT_POST,'faculty');
$gender = filter_input(INPUT_POST,'gender');
$nationality = filter_input(INPUT_POST,'nationality');

?>

<html>
<head>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<title>Confirm</title>
	
</head>

<body class="confirm">
	<form action="success.php" method="GET" class="confirm-button">
	<h1>DEAR <?php echo $fullname; ?> YOUR APPLICATION IS ABOUT TO SUBMIT</h1>
	<h3>PLEASE CONFIRM YOUR DETAILS BELOW BEFORE SUBMMITION</h3>

	<table border="5" class="center">
		<tr class="td">
			<th>S/N</th>
			<th>FIELDS</th>
			<th>YOUR INPUT</th>
		</tr>

		<tr>
			<td>1</td>
			<td>FULL NAME</td>
			<td><?php echo $fullname; ?></td>
		</tr>

		<tr>
			<td>2</td>
			<td>Reg. No</td>
			<td><?php echo $regno; ?></td>
		</tr>

		<tr>
			<td>3</td>
			<td>Phone No.</td>
			<td><?php echo $phoneno; ?></td>
		</tr>

		<tr>
			<td>4</td>
			<td>EMAIL</td>
			<td><?php echo $email; ?></td>
		</tr>

		<tr>
			<td>5</td>
			<td>FACULTY</td>
			<td><?php echo $faculty; ?></td>
		</tr>

		<tr>
			<td>6</td>
			<td>GENDER</td>
			<td><?php echo $gender; ?></td>
		</tr>

		
		<tr>
			<td>7</td>
			<td>NATIONALITY</td>
			<td><?php echo $nationality; ?></td>
		</tr>		


	</table>

	
		<input type="checkbox" required><label>I agree that all the information provided above is true, if I lie, make I bend</label><br><br>
		<input type="submit" name="submit" class="confirm-button-main">
		

	</form>



</body>
</html>
<?php
	
$fullname = filter_input(INPUT_POST,'fullname');
$regno = filter_input(INPUT_POST,'regno');
$phoneno = filter_input(INPUT_POST,'phoneno');
$email = filter_input(INPUT_POST,'email');
$faculty = filter_input(INPUT_POST,'faculty');
$gender = filter_input(INPUT_POST,'gender');
$nationality = filter_input(INPUT_POST,'nationality');



	$host = "localhost";
	$dbusername = "root";
	$dbpassword = "";
	$dbname = "hostel";


	$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);


	
	$sql = "INSERT INTO registration (fullname, regno, phoneno, email, faculty, gender, nationality)
		values ('$fullname', '$regno', '$phoneno', '$email', '$faculty', '$gender', '$nationality')";

		$conn->query($sql);

		$conn->close();
	



?>