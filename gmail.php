<?php session_start();
?>
<!DOCTYPE HTML>
<html>
<head>
<title>gmail</title>

  

</head>

<body style="background-image: url(image.jpeg); background-repeat: no-repeat; background-size: cover;">
	<div id="title">
            <center><h1 style="font-family:vivaldi; background-color: #FFF; border-radius: 10px; padding : 10px;"><i>Scheduling System</i></h1></center>
        </div>

  <form action="gmail.php" method="POST">

  <div>
    <h6>sadasdas</h6>
    <table >
      <tr>
        <td > <label for="sender" style="color:white">From:</label></td>
        <td><input type="email" id="sender" name="email" value="<?php $email=$_GET['email'];
        echo $email; ?>"/></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td> <label for="reciever" style="color:white">To:</label></td>
      <td> <input type="email" id="reciever" name="reciever" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td> <label for="subject" style="color:white">Subject:</label></td>
        <td> <input type="text" id="subject" name="subject" /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td> <label for="message" style="color:white">Message:</label></td>
        <td> <input type="textarea" id="message" name="message"  /></td>
      </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td> <label for="date" style="color:white">Date:</label></td>
        <td> <input  type="date" id="date" name="date"></td>
		  </tr><tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td> <label for="time" style="color:white">Time:</label></td>
        <td> <input id="time" name="time" type="time"></td>
		  </tr>
      <tr>
        <td></td>
        <td></td>
      </tr>
      <tr>
        <td rowspan=2><center><input type="Submit" id="create" value="Create" name="sub"></center></td>
      </tr>
</table>
</div>
</form>
</body>
</html>

<?php
error_reporting(E_ALL);
if( isset($_POST['sub']))
{
  $con = mysql_connect("localhost","root","","project");
  if (!$con)
  {
    die('Could not connect: ' . mysql_error());
  }

  mysql_select_db("project", $con);

  $users_sender = $_POST['email'];
  $users_reciever= $_POST['reciever'];
  $_SESSION["sen"] = $users_sender; 
  $users_subject = $_POST['subject'];
  $users_message = $_POST['message'];
  $users_date = $_POST['date'];
  $users_time = $_POST['time'];


  $query = "INSERT INTO gmail VALUES('$users_sender','$users_reciever', '$users_subject', '$users_message','$users_date','$users_time',0)";

  mysql_query($query) or die("Query error");
  //mail($users_reciever, $users_subject, $users_message);
  mysql_close($con);
header("Location:end.php");
}
?>
