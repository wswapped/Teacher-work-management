<?php
session_start();

$con=MySQL_connect("localhost","root","");
$db=MySQL_select_db("project");
if (!$db) { echo "failed to connect to database".MySQL_error();
}
if (!$con) {
  echo "fails to connect database!!".MySQL_error();
}

//var_dump($_POST);

// username and password sent from form
$myusername=$_POST['username'];
$mypassword=$_POST['password'];

// To protect MySQL injection (more detail about MySQL injection)
// $myusername = stripslashes($myusername);
// $mypassword = stripslashes($mypassword);
// $myusername = mysql_real_escape_string($myusername);
// $mypassword = mysql_real_escape_string($mypassword);

$sql="SELECT * FROM teachers_identifications
WHERE teacher_username='$myusername' AND teacher_passwords='$mypassword'  ";
 // die($sql);
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
  // Register $myusername, $mypassword and redirect to file "login_success.php"
  $row = mysql_fetch_row($result);

  $_SESSION['id']=$row[0];
  $_SESSION['username']=$row[1];
  $_SESSION['usertype']=$row[3];
  $_SESSION['firstname']=$row[6];
  $_SESSION['lastname']=$row[5];
  if($row[3]=="admin")
  header("location:../dos.php");
  else if($row[3]=="teacher")
  header("location:../teacher.php");
}else {
  header("location:../login.php?login=error" );
}
?>
