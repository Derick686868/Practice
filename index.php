<?php
require_once "Includes/logic.php";
require_once "Includes/DataBase.php";
?>
<!DOCTYPE html> 
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
	<link rel="stylesheet" href="CSS/style.css">
	<title>Практика</title>
	<script src='https://www.google.com/recaptcha/api.js'></script>
</head>
<body>	
	<div class="web-form_wrapper container-md">
		<form action="index.php" method="POST">
			<input required="required" class="form-control" type="text" minlength="2" maxlength="20" name="surname" placeholder="Фамилия"><br>

			<input required="required" class="form-control" type="text" minlength="2" maxlength="20" name="name" placeholder="Имя"><br>

			<input required="required" class="form-control" type="text" minlength="2" maxlength="20" name="patronymic" placeholder="Отчество"><br>

			<input required="required" class="form-control" type="phone" name="number" placeholder="Номер телефона"><br>

			<input class="form-control" type="date" name="date"><br>

			<input class="form-control" type="email" name="email" placeholder="Адрес электронной почты"><br>

			<input class="form-control-file" accept=".png,.jpg" type="file" name="file"><br>

			<output for="fader" id="volume">20</output>

			<input required="required" type="range" name="range" min="20" max="80" step="1" value="0" oninput=" outputUpdate(value)" class="form-control-range" id="fader"><br>
			<hr/>
			<div 
			class="g-recaptcha" 
			data-sitekey="6LcFSKYZAAAAANwtYNkCofLCq4oAqp2L0clZBWii"
			data-size = "normal" 
			data-callback = "capcha_filled"
   			data-expired-callback = "capcha_expired"
			data-theme = "dark">	
			</div>
			<br>
			<button type="submit" name="send" class="rss-button">Отправить</button>
		</form>
	</div>
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
	<script src="Librarys/JQuery/jquery-3.5.1.min.js"></script> 
	<script src="js/JavS.js"></script> 
	<script src="Librarys/Mask/jquery.inputmask.js"></script>
	<script src="Librarys/RedBean/rb.php"></script>

</body>
</html>