<?php
session_start();


/*
$con=MySQL_connect("localhost","root","");
$db=MySQL_select_db("training");
if (!$db) { echo "failed to connect to database".MySQL_error();
}
if (!$con) {
  echo "fails to connect database!!".MySQL_error();
}*/

 // if (isset($_POST['submit'])) {
   // DATABASE Connection
  $con=MySQL_connect("localhost","root","");
  $db=MySQL_select_db("project");
  if (!$db) { echo "failed to connect to database".MySQL_error();
  }
  if (!$con) {
    echo "fails to connect database!!".MySQL_error();
  }
  //database Connection ends
   $username=$_POST['username'];
   $pwd=$_POST['password'];
   /*$username=mysqli_real_escape_string($con,$_POST['username']);
   $pwd=mysqli_real_escape_string($con,$_POST['password']);*/

   //error handlers
   //check if input are Empty
  //  if (!Empty($username) || Empty($pwd) ) {
  //    //$_SESSION['message'] = "Empty fields, first fill all fields!";
  //    header("location:../login.php?login=Empty");
  //    //exit();
  //  }
  //  else {
    // if a session['usertype'] is not an admin display error
    // with a redict to the login from page

  //
     //$sql="SELECT username,user_psswrd FROM users WHERE username='$username' AND user_psswrd='$pwd'";

      /*if (!$sql) {
        echo "query failed".mysql_error();
      }*/

      $sql="SELECT * FROM teachers_identifications WHERE teacher_username='$username' AND teacher_passwords='$pwd'";
     //$sql="SELECT * FROM users WHERE id='$username'";
     $result=mysql_query($sql);
     $resultcheck= mysql_num_rows($result);
     if ($resultcheck == 1) {
       header("Location:../login.php?login=errorrrrrr ");
       //$_SESSION['message'] = "Wrong Username or password";
       exit();
     }
  //  }
     /*$usertype = $row['user_type'];
     $checkusertype = mysql_num_rows($usertype);
     if ($checkusertype == user ) {
     header("Location:../login_form.php?usertype=error");
   }
     else {*/
       //if ($row = mysql_fetch_assoc($resultcheck)) {
         // de-hashing the passwords
         //$hashedpwdcheck = password_verify($pwd , $row['user_psswrd']);
         //$hashedpwdcheck =  $row['user_pwd'];
         /*if ($hashedpwdcheck == false) {
           header("Location:../login_form.php?login=Password or username error");
           $_SESSION['message'] = "Wrong  password";
           exit();

         }elseif ($hashedpwdcheck == true) {
           // LOG IN THE USER HERE*/
       $row = mysql_fetch_row($result);
        $_SESSION['teacher_id']=$row['0'];
        $_SESSION['teacher_firstname']=$row['1'];
        $_SESSION['teacher_lastname']=$row['2'];
        $_SESSION['teacher_email']=$row['3'];
        $_SESSION['teacher_username']=$row['4'];
        $_SESSION['date']=$row['5'];
        $_SESSION['teacher_usertype']=$row['6'];
        $_SESSION['teacher_passwords']=$row['7'];

      if ($row['6']=="admin") {
        header("location:../dos.php?login=success");
      }
     elseif ($row['6']=="user") {
       header("location:../teacher.php?login=success");
     }


            /*$_SESSION['tr_id']=$row['tr_id'];
            $_SESSION['firstname']=$row['tr_firstname'];
             $_SESSION['lastname']=$row['tr_lastname'];
             $_SESSION['username']=$row['tr_username'];
             $_SESSION['pwd']=$row['user_psswrd'];*/

             //header("Location:../login_form.php?login=success");
            /* header("location:../home.php?login=success");
             exit();*/
        // }
    //  }
     //}

//  else {
//   header("Location:../login.php?login=error due to unaccessible authentication");
//   //$_SESSION['message'] = "First login as admin !! ";
//   exit();
 // }



 ?>
