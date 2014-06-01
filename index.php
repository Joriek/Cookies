<?php 

require_once("html.php");

$name = "";
$start = "ja";
$_POST['verwijder'] = "nee";


if($_POST["name"] != ""){
	setcookie("name" , ($_POST["name"]), strtotime('+1 year'));
	session_start();
	$start = "ja";
	$_SESSION['start']= "ja";
	$_POST["name"] = "";
	}

if(isset($_COOKIE["name"])){
 	$name = $_COOKIE["name"];
 	}

if($_POST["verwijder"] == "delete"){
	$name = "";
	$start = "nee";
	setcookie("name", "", strtotime("-1 year"));
	if(isset($_SESSION['start'])){
		session_destroy();
  		$_SESSION['start']= "nee";
  		}
	}

$content = new Div(
				new Heading("Session gestart? ==> ". $start).
				new Heading("Welkom ". $name).
				new Form(
				new Input("name", "text", array("class" => "form-control")) .
				new Button("Login", array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit")).
				new Button("Delete",  array("class" => "btn btn-lg btn-primary btn-block", "type" => "submit"))
				, array( "method" => "post", "name" => "verwijder", "value" => "delete")

			), array("class" => "container", "method" => "post")
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