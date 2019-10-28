<?php $age = htmlspecialchars($_GET['age']); 
if ($age < 12) {
    echo "Hello kiddo!";
}elseif ($age <= 18) {
    echo "Hello Teenager !";
}elseif ($age <= 115) {
    echo "Hello Adult !";
}elseif ($age > 115) {
    echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
}
?> 
