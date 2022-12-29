<?php
	$connect = mysqli_connect("127.0.0.1", "root", "", "twitter");

	$text_query = 'SELECT * FROM tweets';

	$insert = "INSERT INTO tweets(name_author, text, avatar, image) VALUES ('{$_GET['autor']}', '{$_GET['maintext']}', 'img/4.jpg', 'img/2.png')";

   	$result_insert = mysqli_query($connect, $insert);
   	$results = mysqli_query($connect, $select);

   	ob_start();
   	$new_url = 'index.php';
   	header('Location: '.$new_url);
   	ob_end_flush();
?>