<?php 
session_start();
require_once("html.php");
$name ="";
$start = "nee";
$test = "blabla";

if(isset($_POST["delete"])){
		$name = "";
		$start = "nee";
		$test = "omgjermlgjzemljmlkjmlrjgmlezrjg";
		setcookie("name", "", strtotime("-1 year"));
		if(isset($_SESSION['start'])){
  			$_SESSION['start']= "nee";
  			}
	}

if(isset($_POST["name"])){
	setcookie("name" , ($_POST["name"]));
	$_SESSION['start']= "ja";
	$name = $_POST["name"];
	}

if(isset($_COOKIE["name"])){
 		$name = $_COOKIE["name"];
 	}

$content = new Div(
				new Heading("$test").
				new Heading("Session gestart? ==> ". $_SESSION['start']).
				new Heading("Welkom ". $name).
				new Form(
				new Input("name", "text", array("class" => "form-control")) .
				new Button("Login", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit")).
				new Button("Delete",  array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit"))
				, array("class" => "form-signin", "method" => "post", "value" => "delete")

			), array("class" => "container")
		);	

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<?= $content ?>
 </body>
 </html>