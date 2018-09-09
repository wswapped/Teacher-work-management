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

                  $firstname=$_POST['firstname'];
                  $lastname=$_POST['lastname'];
                  $email=$_POST['email'];
                  $username=$_POST['Username'];
                  $usertype=$_POST['Usertype'];
                  $password=$_POST['Password'];
                  $cofirmpassword=$_POST['confirmPassword'];
                  $date=date('y-m-d');
                  $teacher_id=$_SESSION['teacher_id'];
                  $sql=mysql_query("INSERT INTO `project`.`teachers_identifications`
                                  (
                                  `teacher_firstname` ,
                                  `teacher_lastname` ,
                                  `teacher_email` ,
                                  `teacher_username` ,
                                  `teacher_usertype` ,
                                  `teacher_passwords` ,
                                  `teacher_lesson` ,
                                  `date` ,
                                  `photo`)
                              VALUES ('$firstname', '$lastname', '$email', '$username', '$usertype', '$password', 'php', '$date', 'pics/people.png'
                            ) ");
      // echo "$sql"; va

                        if (!$sql)
                              {
                                echo " query failed ".mysql_error();
                                 }
                                  else
                                  {
                                    echo "successfully updated ";
                                     header("location:../teacher_lists.php");
                                 }

?>
