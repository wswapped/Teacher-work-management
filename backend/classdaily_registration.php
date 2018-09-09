<?php session_start(); ?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title></title>
</head>
<body>
  <?php
  //include '../classdairy.php';
  $con=MySQL_connect("localhost","root","");
  $db=MySQL_select_db("project");

  if (!$db) { echo "failed to connect to database".MySQL_error();
  }
  if (!$con) {
    echo "fails to connect database!!".MySQL_error();
  }
 if (isset($_POST['first_h'])) {


  $times=$_POST['hour'];
  $branch=$_POST['branch'];
  $matters=$_POST['matters'];
  $subject=$_POST['subject'];
  $app=$_POST['app'];
  $obs=$_POST['obs'];

  //$application=$_POST['application'];
  //$observation=$_POST['observation'];
  //$dyname=$_POST['dy_names'];
  //$dates=$_POST['dates'];

  //$dyname=getdate('%s',$dyname['weekday']);
  //$a=getdate();
  //printf('%s %d, %d',$a['month'],$a['mday'],$a['year']);
  //date_default_timezone_set("greenwitch/ciaro");
   $date=date('y-m-d');
  $teacher_id=$_SESSION['teacher_id'];
  echo "$teacher_id";
    //$username=$_SESSION['id'];

   $a=getdate();
    //$b=getnow();
  //print_R()
  $sql="INSERT INTO classdaily (hours,branch,matters,subject,application,observation,date,teacher_id) VALUES
  ('$times','$branch','$matters','$subject','$app','$obs','$date','$teacher_id')";

   $insert=mysql_query($sql);
   var_dump($insert);
   print_r($sql);
    if(!$insert)
  {
    echo " query failed ".mysql_error();
  }
   else {
     echo "form successfully submited";
     header("location:../activity_lists.php");
   }
}


   ?>
</body>
</html>
