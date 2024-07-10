<?php
ob_start();
session_start();
  include("includes/database.class.php");


if($_GET['trankey'])
{
$transkey=$_GET['trankey'];
	$db7 = new Database();
	$db7->deletedata('patient_detail', array("id"=>$transkey));
	$db7->dbclose();
	header('Location:admin_view.php');
	

}
else
{
	header('Location:./');
}


?>