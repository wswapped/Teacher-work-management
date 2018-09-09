<?php session_start();
  if ($_SESSION['usertype'] == 'teacher' ) {
    header("location:login.php"); }
    
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEACHER || PANNEL</title>
    <!-- Bootstrap core CSS -->``
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>


    <?php
      //if (isset($_post['submit'])) {

      $con=MySQL_connect("localhost","root","");
      $db=MySQL_select_db("project");
      if (!$db) { echo "failed to connect to database".MySQL_error();
      }
      if (!$con) {
        echo "fails to connect database!!".MySQL_error();
      }

      if(!empty($_GET['id']))
        {
         $id = $_GET['id'];

       //var_dump($id);

         $delete_record=mysql_query("delete from classdaily where classdairy_id='$id' ");

         if (!$delete_record) {
           echo "query deleted".mysql_error();
         }
       }


      // $search=$_POST['search'];
     //$username=$_SESSION['username'];
     //$id=$_SESSION['tr_id'];

       //$sql=Mysql_query("select * from classdairyy where username='$username'");
     $sql=Mysql_query("select * from classdaily");
       //$sql=Mysql_query("select * from classdairyy where tr_id ='$id'");
        if (!$sql) {
          echo " query failed ".mysql_error();
        }
          $x= mysql_num_rows($sql);
         //mysql_close($con);


                  ?>




    <nav class="navbar navbar-inverse "><!--navbar-fixed-top-->
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <!-- the right side of the top navbar-->

        <a class="navbar-brand"  href="#">E-Teacher's classdaily </a>
      </div>
      <div id="navbar" class="collapse navbar-collapse">
        <ul class="nav navbar-nav">
          <li class="active"><a href="#">session 2018</a></li>
        </ul>

        <!-- the right side of the top navbar-->

        <ul class="nav navbar-nav navbar-right">
          <li><a href="#notifications"><span class="glyphicon glyphicon-bell"></span></a></li>
          <li><a href="#Email"><span class="glyphicon glyphicon-envelope"></span></a></li>


          <!-- Dropdown -->
        <!--  <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-toggle="dropdown">
              Dropdown link
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="#">Link 1</a>
              <a class="dropdown-item" href="#">Link 2</a>
              <a class="dropdown-item" href="#">Link 3</a>
            </div>
          </li>-->
          <li>
           <div class="">
          <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">
             Welcome,  <span class="glyphicon glyphicon-user">Mr Fred <span class="caret"></span></a>
            <!--<li class="nav-item dropdown">-->
                      <ul class="dropdown-menu">
              <li><a href="#">Submenu 1-1</a></li>
              <li><a href="#">Submenu 1-2</a></li>
              <li><a href="backend/logout.php"><span class="glyphicon glyphicon-log-out">
                LOGOUT</a></li>
            </ul>
            </li>
          </div>
         <div class="dropdown-menu">
         <li><a class="dropdown-item" href="#">Link 1</a>
          <li><a class="dropdown-item" href="#">Link 2</a></li>
          <li><a class="dropdown-item" href="#"><span ></span>Logout</a></li>
       </div>
     </li>
   </ul>
      </div><!--/.nav-collapse -->
    </div>
    </nav>
    <!--THE HEADER SECTION-->
    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-mid-10">
            <h1><span class="glyphicon glyphicon-education" aria-hidden="true"></span>
              <strong>TEACHER'</strong><small>s Area <small>school activities</small>  </small></h1>
          </div>
        </div>
      </div>
    </header>
    <div class="col-md-2">
      <div class="dropdown">
         <button class="btn btn-default dropdown-toggle" type="button" id="dropdown-menu1" data-toggle="dropdown">
           DOS REPORTS
            <span class="caret"></span></button>
              <ul class="dropdown-menu">
                  <li><a type="button" data-toggle="modal" data-target="#addclassdaily" href="#">
                    class daily Report</a></li>
                  <li><a type="button" data-toggle="modal" data-target="#addsessionplan" href="#">session plan Report</a></li>
              </ul>
         </div>
    </div>

         <section id="breadcrumb">
            <div class="container">
              <ol class="breadcrumb">
                <li class="active">Dos Pannel</li>
              </ol>
            </div>
         </section>

      <div class="col-md-8">
              <div class="panel panel-default">
                <div class="panel-heading "><span class="glyphicon glyphicon-cog">
                  CONTENT OVERVIEW</div>
                   <div class="panel-body">
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-book"></span>
                      </h2><h3>Classdairy</h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-file"></span>
                      </h2><h3>Session Plan</h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-envelope"></span>
                      </h2><h3>Email</h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-list-alt"></span>
                      </h2><h3>Activity Lists</h3>
                     </div>
                   </div>
               </div>
             </div>

             <div class="panel panel-default">
                    <div class="panel-heading">Classdaily Page Created On</div>
                     <div class="panel-body">

                       <div class="table-responsive">
                         <table class="table table-striped table-hover">

                            <thead>
                              <tr>
                                <th>#</th>
                                <th>Date</th>
                                <th>Action</th>
                              </tr>

                            </thead>
                           <tr>
                             <?php
                       $date=mysql_query("select distinct date from classdaily");

                     if (!$date) {
                       echo " query failed ".mysql_error();
                     }
                     $counter = 0;
                      while($data = mysql_fetch_assoc($date))
                      {
                        $counter++;
                    ?>
                           </tr>
                            <tbody>
                              <tr>
                                <td>
                                  <?php echo $counter;   ?>
                                </td>
                                <td>
                                  <?php echo $data['date'];   ?>
                                </td>
                                <td>
                                  <a type="button" id="" href="?date=<?php echo $data['date'];   ?>" class="btn btn-default btn-md">view</a>
                                </td>
                              </tr>
                               <tr>
                                 <?php
                                 }
                                ?>
                               </tr>
                            </tbody>
                          </table>

                          </div>
                        </div>

                     </div>


            <div class="panel panel-default">
                   <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body">

                      <?php
                        //check if date is specified in GET

                        if(!empty($_GET['date'])){
                          $selectDate = $_GET['date'];
                          // var_dump($selectDate);
                        // $query =mysql_query("select * from date from classdaily ");
                        //   if (!$query) {
                        //     echo "query failed".MySQL_error();
                        //   }
                        $sql=Mysql_query("select * from classdaily where date='$selectDate' ");
                          //$sql=Mysql_query("select * from classdairyy where tr_id ='$id'");
                           if (!$sql) {
                             echo " query failed ".mysql_error();
                           }
                             $x= mysql_num_rows($sql);

                        }
                       ?>
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <?php
                          if(!empty($_GET['teacher_id'])){
                            $id = $_GET['teacher_id'];

                            var_dump($id);

                             $delete_record=mysql_query("delete from classdaily where id='$id' ");
                             if (!$delete_record) {
                               echo "query deleted".mysql_error();
                             }
                           }
                      //  if (isset($_POST['edit'])) {
                       //
                      //       if (!empty($_GET['teacher_id'])){
                      //           $id = $_GET['teacher_id'];) {
                      //             $hour=$_post[''];
                      //               $update_record=mysql_query("update classdaily set  hours= where id='$id' ");
                      //                 if (!$update_record) {
                      //                     echo "query deleted".mysql_error();
                      //                   }
                      //      }

                          ?>
                           <thead>
                             <tr>
                               <th>Times</th>
                               <th>branch</th>
                               <th>Matters</th>
                               <th>Subject</th>
                               <th>Application</th>
                               <th>Observation</th>
                               <th></th>
                               <th></th>
                             </tr>
                           </thead>

                          <tr>
                            <?php

                     $a=0;
                     while($a<$x)
                     {
                     $times=MySQL_result($sql,$a,'hours');
                     $branch=MySQL_result($sql,$a,'branch');
                     $matters=MySQL_result($sql,$a,'matters');
                     $subject=MySQL_result($sql,$a,'subject');
                     $application=MySQL_result($sql,$a,'application');
                     $observation=MySQL_result($sql,$a,'observation');
                     $id=MySQL_result($sql,$a,'teacher_id');
                     //$classdry_id=MySQL_result($sql,$a,'date');
                     $date=MySQL_result($sql,$a,'date');
                   ?>
                          </tr>
                           <tbody>
                             <tr>

                               <td><?php echo $times; ?></td>
                               <td><?php echo $branch; ?></td>
                               <td><?php echo $matters; ?></td>
                               <td><?php echo $subject; ?></td>
                               <td><?php echo $application; ?></td>
                               <td><?php echo $observation; ?></td>


                               <!--<td><?php //echo $classdry_id; ?></td>-->
                               <td>
                           <a type="button" onclick="delete()" href="?id=<?php echo $id ?> " name="delete" class="btn btn-danger btn-md">
                                 Delete
                               </button>
                               <script>
                                        function delete() {
                                            var txt;
                                            if (confirm("Press a button!")) {
                                                txt = "confirm delete!";
                                            } else {
                                                txt = "record deleted !";
                                            }
                                            document.getElementByclass("btn btn-danger btn-md").innerHTML = txt;
                                        }
                                  </script>
                             </td>
                                 <?php

                                      ?>
                               <td><a type="button" href="update.php?id=<?php echo $id ?> " name="edit" class="btn btn-primary btn-md">Edit</button></td>
                             </tr>
                              <tr>
                                <?php
                                 $a++;
                                 }?>
                              </tr>
                           </tbody>
                         </table>

                         </div>
                       </div>

                    </div>
                 </div>
          </div>









    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
