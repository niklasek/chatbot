<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Welcome to Chatbot!</title>
</head>
<body>


<?php
/** Kolla om query string parametern (GET parametern) är (==) tom (NULL)
 *	I fall att den är tom visas ett formulär som ber besökaren fylla i sitt namn
 */
if ($_GET['name'] == NULL):
?>

<form>
	<label for="name">Name</label>
	<input type="text" name="name" id="name">
	<input type="submit" value="Send!">
</form>

<?php

else: 

$name = $_GET['name'];
$half_name_length = (int) (mb_strlen($name) / 2);
$remaining_chars = mb_strlen($name) - $half_name_length;
$name_end = mb_substr($name, $half_name_length, $remaining_chars);
$name_beginning = mb_substr($name, 0, $half_name_length);
$botname = $name_end . $name_beginning;
?>

<h1><?= $botname ?></h1>

<?php endif ?>

</body>
</html>
