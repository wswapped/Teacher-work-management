<?php
session_start();
$con=MySQL_connect("localhost","root","");
$db=MySQL_select_db("project");

if (!$db)
    {
        echo "failed to connect to database".MySQL_error();
       }
         if (!$con) {
             echo "fails to connect database!!".MySQL_error();
             }

                  $times=$_POST['hour'];
                  $branch=$_POST['branch'];
                  $matters=$_POST['matters'];
                  $subject=$_POST['subject'];
                  $app=$_POST['app'];
                  $obs=$_POST['obs'];
                  $date=date('y-m-d');
                  $teacher_id=$_SESSION['teacher_id'];
            $sql=mysql_query("UPDATE `project`.`classdaily` SET `hours` = '$times',
                      `branch` = '$branch',
                      `matters` = '$matters',
                      `subject` = '$subject',
                      `application` = '$app',
                      `observation` = '$obs',
                      `date` = '$date' WHERE `classdaily`.`classdairy_id` =$teacher_id;");

              if (!$sql)
                    {
                      echo " query failed ".mysql_error();
                       }
                        else
                        {
                          echo "successfully updated ";
                           header("location:../activity_lists.php");
                       }
                  //  }
 ?>
