<?php 
$genre = htmlspecialchars($_GET['genre']); 
$repquest = htmlspecialchars($_GET['ques']);
$age = htmlspecialchars($_GET['age']);
echo $genre.$repquest.$age;
?> 