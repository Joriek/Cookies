<?php 
$name = "";
if(isset($_POST["name"])){
	setcookie("name" , ($_POST["name"]));
	$name = $_POST["name"];
}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 <?php 
	if(isset($_POST["delete"])){
		$name = "";
		setcookie("name", "", strtotime("-1 year"));
	}

 if(isset($_COOKIE["name"]) && $_COOKIE["name"] == ("test")){
	 
	} else {
 ?>
 	<form method="post">
 		<input type="name" name="name">
 		<input type="submit">
 		<input type="submit" name="delete" value="Destroy">
 	</form>	
 	<h1><?php  echo $name; ?></h1>
 	<?php 
 		}
  ?>
 </body>
 </html>