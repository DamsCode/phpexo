<?php 

$now = date("h : i");

$datenow = new DateTime(null, new DateTimeZone('Europe/Brussels'));

$dateTime = new DateTime(null, new DateTimeZone('Europe/Brussels'));

if ($datenow >= $dateTime->setTime(5, 00) && $datenow < $dateTime->setTime(9, 00)) {
  echo "Good morning !";
}else if($datenow > $dateTime->setTime(9, 01) && $datenow < $dateTime->setTime(12, 00)){
    echo "Good day !";
}else if($datenow > $dateTime->setTime(12, 01) && $datenow < $dateTime->setTime(16, 00)){
  echo "Good afternoon !";
}else if($datenow > $dateTime->setTime(16, 01) && $datenow < $dateTime->setTime(21, 00)){
  echo "Good evening !";
}else if($datenow > $dateTime->setTime(21, 01) && $datenow < $dateTime->setTime(4, 59)){
  echo "Good night !";
}
?>
 
