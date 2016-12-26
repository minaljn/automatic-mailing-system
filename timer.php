<?php
$con = mysql_connect("localhost","root","") or die("Connection error");
  mysql_select_db("project", $con) or die("Database error");
 date_default_timezone_set('Asia/Kolkata');
 $flag=0;
$time = time("H:i:s");
$date_time = date("d-m-Y");
echo $time."  ";
echo "$date_time"."  ";

$info = getdate();
$date = $info['mday'];
$month = $info['mon'];
$year = $info['year'];
$hour = $info['hours'];
$min = $info['minutes'];
$sec = $info['seconds'];
$a=$_GET['email'];

echo $a;

$current_time = "$hour:$min:$sec";
echo $current_time;
  $q1 = "SELECT * FROM gmail where sender=$a";
  $res=mysql_query($q1);
  $row=mysql_fetch_array($res);
  echo $row['receiver'];
  		echo $row['subject'];
  		echo $row['message'];
  		echo $row['sender'];

 while($row=mysql_fetch_array($res))
  {
  	if($row['date']==$date_time && $row['time']==$current_time)
  	{
  		$a = mail($row['receiver'],$row['subject'],$row['message'],"From:".$row['sender']) or die("Unable to Mail");
  		echo $row['receiver'];
  		echo $row['subject'];
  		echo $row['message'];
  		echo $row['sender'];
  		echo $a;
  	  $flag=1;
  	}
  }
if($flag==0)
echo "failed";
else
echo "Success";
?>