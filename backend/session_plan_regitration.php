<?php
session_start();
  //include '../classdairy.php';
  $con=MySQL_connect("localhost","root","");
  $db=MySQL_select_db("training");

  if (!$db) { echo "failed to connect to database".MySQL_error();
  }
  if (!$con) {
    echo "fails to connect database!!".MySQL_error();
  }

  $sector=$_POST['sector'];
  $no_std=$_POST['no_std'];
  $date=date('y-m-d');
  $time=$_POST['time'];
  $class=$_POST['class'];
  $week=$_POST['week'];
  $trade=$_POST['trade'];
  $name=$_POST['name'];
  $sp_obj=$_POST['sp_obj'];
  $tch_aids=$_POST['tch_aids'];
  $presentation=$_POST['presentation'];
  $presnt_time_estimate=$_POST['presnt_time_estimate'];
  $dev=$_POST['dev'];
  $dev_time_estimate=$_POST['dev_time_estimate'];
  $conclusion=$_POST['conclusion'];
  $concln_time_estimate=$_POST['concln_time_estimate'];
  $evaluation=$_POST['evaluation'];
  $evl_time_estimate=$_POST['evl_time_estimate'];
  $ass_hw_clls=$_POST['ass_hw_clls'];
  $ass_hw_clls_estm=$_POST['ass_hw_clls_estm'];
  $refe_tch_nts=$_POST['refe_tch_nts'];
  $refe_tch_nts_estm=$_POST['refe_tch_nts_estm'];
  $remarks=$_POST['remarks'];
  $remks_time_estimate=$_POST['remks_time_estimate'];
  // $=$_POST[''];
  // $=$_POST[''];$=$_POST[''];


  //$application=$_POST['application'];
  //$observation=$_POST['observation'];
  //$dyname=$_POST['dy_names'];
  //$dates=$_POST['dates'];

  //$dyname=getdate('%s',$dyname['weekday']);
  //$a=getdate();
  //printf('%s %d, %d',$a['month'],$a['mday'],$a['year']);
  //date_default_timezone_set("greenwitch/ciaro");
  //  $date=date('y-m-d');
  // $username=$_SESSION['username'];
    //$username=$_SESSION['id'];

  //$a=getdate();

  $sql="INSERT INTO session_plann (sector,no_of_students,date,time,class,week,
    trade,module,lu,learing_place,
    bb,specific_Objectives
  ,Teaching _Aids,presentation,presentation_estm,Development,
  Development_estm,conclusion,conclusion_estm,Evaulation,
  Evaulation_estm,
  ,Assessement_Homework_class_group _work,Assessement_Homework_class_group_work_estm,
  Refces_Ter_Ntes_in,Refces_Ter_Ntes_in_estm,
  Remarks,Remarks_estm,usertype,session_id,tr_username);
   VALUES
  ('$sector','$no_std','$date','$time','$class','$week','$trade','$name'
    ,'$sp_obj','$tch_aids','$presentation','$presnt_time_estimate',
    '$presnt_time_estimate','$dev_time_estimate','$conclusion'
  ,'$concln_time_estimate','$evaluation','$evl_time_estimate',
  '$ass_hw_clls','$ass_hw_clls_estm','$refe_tch_nts',
  '$refe_tch_nts_estm','$remarks','$remks_time_estimate')";

   $insert=mysql_query($sql);

    if(!$insert)
  {
    echo " query failed ".mysql_error();
  }
   else {
     echo "form successfully submited";
    //  header("location:../trainer_clss_retr.php");
   }



   ?>
