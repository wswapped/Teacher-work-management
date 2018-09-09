<?php
session_start();
if (isset($_POST['submit'])) {
  $con=MySQL_connect("localhost","root","");
  $db=MySQL_select_db("project");
  if (!$db) { echo "failed to connect to database".MySQL_error();
  }
  if (!$con) {
    echo "fails to connect database!!".MySQL_error();
  }
  $uid=$_POST['username'];
  $pwd=$_POST['password'];

  if ( (Empty($uid)) || (Empty($pwd)) ) {
    header("Location:../login.php?login=Empty fields");
  }else {
    $sql="SELECT * FROM teachers_identifications
    WHERE teacher_username='$uid' AND teacher_passwords='$pwd'";
    $result=mysql_query($sql);
    $resultcheck= mysql_num_rows($result);

    if ($resultcheck < 1) {
      header("Location:../login.php?login=errorrrrrr ");
    }elseif ($resultcheck == true) {
        $row = mysql_fetch_assoc($result);
        var_dump($row);
        echo $row['teacher_usertype'];
       if ($row['teacher_usertype']=="dos") {
         $_SESSION['teacher_id']=$row['teacher_id'];
         $_SESSION['teacher_firstname']=$row['teacher_firstname'];
         $_SESSION['teacher_lastname']=$row['teacher_lastname'];
         $_SESSION['teacher_email']=$row['teacher_email'];
         $_SESSION['teacher_username']=$row['teacher_username'];
         $_SESSION['date']=$row['date'];
         $_SESSION['teacher_usertype']=$row['teacher_usertype'];
         $_SESSION['teacher_passwords']=$row['teacher_passwords'];
       header("location:../dos.php?login=success");
       }
      elseif ($row['teacher_usertype']=="teacher") {
        $_SESSION['teacher_id']=$row['teacher_id'];
        $_SESSION['teacher_firstname']=$row['teacher_firstname'];
        $_SESSION['teacher_lastname']=$row['teacher_lastname'];
        $_SESSION['teacher_email']=$row['teacher_email'];
        $_SESSION['teacher_username']=$row['teacher_username'];
        $_SESSION['date']=$row['date'];
        $_SESSION['teacher_usertype']=$row['teacher_usertype'];
        $_SESSION['teacher_passwords']=$row['teacher_passwords'];
      header("location:../teacher.php?login=success");
      }
      }

  }
}else {
 header("Location:../login.php?login=error due to unaccessible authentication");
 }

 ?>
