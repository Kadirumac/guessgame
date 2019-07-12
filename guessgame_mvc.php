<?php
$oldguess = '' ;
$message = false ;

if (isset($_POST['guess'])){

	$oldguess = $_POST['guess'] + 0;

	if ($oldguess == 42 ) {
		$message = "Great Job!";
	}
	else if ($oldguess < 42 ){
			$message = "Too short!";
	}

	else  {
			$message = "Too high!";
	}
}

?>

<html>
<head>
	<title></title>
</head>
<body>
	<h3>Guess Game</h3>

<?php if ($message !== false )
echo "<p>$message</p>";
?>

<form method="post">
<p><label for="guess">Input guess</label> 
<input type="text" name="guess" id="guess" size="40" value="<?= htmlentities($oldguess)?>"/></p>
<input type="submit" name=""/>

</form>


</body>
</html>