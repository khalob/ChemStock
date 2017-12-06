<?php
header('Access-Control-Allow-Origin: *');
require_once("conn.php");
if(isset($_POST['name']) && isset($_POST['prepQuantity']) && isset($_POST['prepType']) && isset($_POST['experiment']) && isset($_POST['requiredChemicals']) && isset($_POST['formula']) && isset($_POST['prepProcedure']))
{
	$name = $db->real_escape_string($_POST['name']);
	$prepQuantity = $db->real_escape_string($_POST['prepQuantity']);
	$prepType = $db->real_escape_string($_POST['prepType']);
	$experiment = $db->real_escape_string($_POST['experiment']);
	$requiredChemicals = $db->real_escape_string($_POST['requiredChemicals']);
	$formula = $db->real_escape_string($_POST['formula']);
	$procedure = $db->real_escape_string($_POST['prepProcedure']);
	
<<<<<<< HEAD
	$stmt = $db->prepare("INSERT INTO recipes (name, prepQuantity, experiment, requiredChemicals, formula, prepProcedure) VALUES (?,?,?,?,?,?)");
=======
	$stmt = $db->prepare("INSERT INTO recipes (name, prepQuantity, prepType, experiment, requiredChemicals, formula, prepProcedure) VALUES (?,?,?,?,?,?,?)");
>>>>>>> 041c7d88d1f2e55735ad9aaebccdfc2039073e37
	$stmt->bind_param('sdsssss', $name,$prepQuantity,$prepType,$experiment,$requiredChemicals,$formula,$procedure);
	
	if(!$stmt->execute())
	{
		die('could not insert recipe');
	}
	$stmt->close();
}
$db->close();
?>