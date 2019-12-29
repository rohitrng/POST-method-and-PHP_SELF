<HTML DOCTYPE>
<html>
<head>
	<title>Form</title>
</head>
<body>

<?php
	if (!empty($_POST)) { ?>
	Welcome, <?php echo htmlspecialchars($_POST["name"]); ?>!<br>
    Your email is <?php echo htmlspecialchars($_POST["email"]); ?>.<br>
    Your Mobile Number is <?php echo $_POST["number"]; ?>
	<? } else { ?>		
	<form action="<?php echo $_SERVER['PHP_SELF'];?>" method="POST">
		<input type="text" placeholder="Name" name="name"><br><br>
		<input type="text" placeholder="E-mail" name="email"><br><br>
		<input type="number" placeholder="Number" name="number"><br><br>
		<input type="submit" name="send">
	</form>
<?php } ?>

</body>
</html>