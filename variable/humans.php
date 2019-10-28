<?php $variable_name = "This is the variable's value";
$us_president = 'Donald Trump';
$birth_year = 1973; 
$is_raining = false;
$team_players = array('Jean','Jeanne','Dirk');?>

<html>
  <head><title>Hi!</title></head>
  <body>
  	<?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
   	<?php } ?>
    
  </body>
</html>