<?php
session_start();
	header('Refresh: 1');
	$con = mysql_connect("localhost","root","","project");
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }
$ema = $_SESSION["sen"];
//$ema= "jaroliminal15@gmail.com";
  mysql_select_db("project", $con);
$query = "SELECT * FROM gmail WHERE sender = '$ema'";
$result = mysql_query($query);

$row = mysql_fetch_array($result);

	date_default_timezone_set('Asia/Kolkata');

	 $timeis=date('Y-m-d H:i:s', time());
	 
	 $em = $row["date"]." ".$row["time"];
	 echo $em;
	 echo "  ".$timeis;
	 $users_reciever = $row["receiver"];
	 $users_subject = $row["subject"];
	 $users_message = $row["message"];

	if($timeis == $em)
		{	
			mail($users_reciever, $users_subject, $users_message);
		} 
//	echo $timeis;	
?>