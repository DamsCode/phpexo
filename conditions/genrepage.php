<?php 
$genre = htmlspecialchars($_GET['genre']); 
$repquest = htmlspecialchars($_GET['ques']);
$age = htmlspecialchars($_GET['age']);
if ($age < 12 && $repquest == "yes") {
    echo "<p>Hello ".$genre."</p>";
}elseif($repquest == "no"){
    echo "<p>Aloha ".$genre."</p>";
}else{
    echo "<p>Aloha</p>";
}
?> 