<?php
	session_start ();
	if(isset($_POST["send"])) {
		$from = htmlspecialchars ($_POST["from"]);
		$to = htmlspecialchars ($_POST["to"]);
		$subject = htmlspecialchars ($_POST["subject"]);
		$message = htmlspecialchars ($_POST["message"]);
		$_SESSION["from"] = $from;
		$_SESSION["to"] = $to;
		$_SESSION["subject"] = $subject;
		$_SESSION["message"] = $message;
		
		
		
	}
	se
?>
<!DOCTYPE html>
<html>
<head>
	<title>Обработка форм</title>
</head>
<body>
	<h2>Форма обратной связи</h2>
	<form name"feedback" action="" method="post">
		<label>От кого: </label><br />
		<input type="text" name="from" value="<?=$_SESSION["from"]?>" />
		<span style="color:red"><?=error_to?></span>
		<br />
		
		<label>Кому: </label><br />
		<input type="text" name="to" value="<?=$_SESSION["to"]?>" /><br />
		
		<label>Тема: </label><br />
		<input type="text" name="subject" value="<?=$_SESSION["subject"]?>" /><br />
		
		<label>Сообщение: </label><br />
		<textarea name="message" cols="30" rows="10"><?=$_SESSION["from"]?></textarea><br />
		
		<input type="submit" name="send" value="Отправить" />
	</form>
</body>
</html>