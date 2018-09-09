<?php session_start();
if (!isset($_SESSION['username']) and $_SESSION['usertype'] != 'teacher') {
  header("location:login.php"); }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>DOS || PANNEL</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-inverse"><!--navbar-fixed-top-->
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
              <strong>DOS</strong><small> PANNEL <small>school activities</small>  </small></h1>
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
      <section id="main">
         <div class="container">
           <div class="row">
             <div class="col-md-3">
               <div class="list-group">
                  <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span>
                    contents
                    </a>
                  <a href="teacher_lists.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>
                    Teachers's List</a>
                  <a href="teacher_registration.php" class="list-group-item"><span class="glyphicon glyphicon-book"></span>
                    Teachers Registration (Register)</a>
                    <a href="#" class="list-group-item"><span class="glyphicon glyphicon-pencil"></span>
                      UPDATE TIMETABLE</a>
               </div>
             </div>
           </div>
         </div>
      </section>

      <section id="main">
         <div class="container">
           <div class="row">
             <div class="col-md-3">
               <div class="list-group">
                  <a href="#" class="list-group-item active"><span class="glyphicon glyphicon-cog"></span>
                    Supervision Contents
                    </a>
                  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-folder-open"></span>
                    classdairy Supervision </a>
                  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-file"></span>
                    Session Plan  supervision</a>
               </div>
             </div>
           </div>
         </div>
      </section>


    <div class="col-md-9">
      <!--pannel staff-->
      <!--<div class="panel panel-default">
          <div class="panel-heading">Panel Heading</div>
          <div class="panel-body">Panel Content</div>
      </div>
        <div class="panel-body">
          <div class="col-md-3">
            <div class="well">
              <h2><span class="glyphicon glyphicon-list-alt" aria-hidden="true">
              </span></h2> <h3>Listings</h3>
            </div>
          </div>
          <div class="col-md-3">
            <div class="well">
              <h2><span class="glyphicon glyphicon-book" aria-hidden="true">
              </span></h2> <h3>Teachers Registration (Register)</h3>
            </div>
          </div>
          <div class="col-md-3">
            <div class="well">
              <h2><span class="glyphicon glyphicon-pencil" aria-hidden="true">
              </span></h2> <h3>UPDATETIMETABLE</h3>
            </div>
          </div>

        </div>
      </div>
    </div>-->
    <!-- users (teachers)-->

         <div class="panel panel-default">
              <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span>
              TEACHER'S LISTS</div>
              <h3 class="panel-title"></h3>

              <div class="panel-body">
              <table class="table table-striped table-hover">
                <?php
                  $con=MySQL_connect("localhost","root","");
                   $db=MySQL_select_db("project");
                if (!$db)
                     {
                         echo "failed to connect to database".MySQL_error();
                }
                if (!$con) {
                           echo "fails to connect database!!".MySQL_error();
                      }

                      //  bellow are statements for deleting a teacher

                      if(!empty($_GET['id'])){
                        $id = $_GET['id'];

                      //  var_dump($id);

                         $delete_record=mysql_query("delete from teachers_identifications where teacher_id='$id' ");
                         if (!$delete_record) {
                           echo "query deleted".mysql_error();
                         }
                       }

                      //  query for retrieving teacher
              $sql=Mysql_query("select * from teachers_identifications");
                  //$sql=Mysql_query("select * from classdairyy where tr_id ='$id'");
                   if (!$sql) {
                              echo " query failed ".mysql_error();
                   }
                       $x= mysql_num_rows($sql);
                 ?>
                  <thead>
                      <tr>
                          <th>Firstname</th>
                          <th>Lastname</th>
                          <th>Email</th>
                        </tr>
                      </thead>
                    <?php

               $a=0;
               while($a<$x)
               {
               $id=MySQL_result($sql,$a,'teacher_id');
               $teacher_firstname=MySQL_result($sql,$a,'teacher_firstname');
               $teacher_lastname=MySQL_result($sql,$a,'teacher_lastname');
               $teacher_email=MySQL_result($sql,$a,'teacher_email');
               $teacher_username=MySQL_result($sql,$a,'teacher_username');
               $teacher_usertype=MySQL_result($sql,$a,'teacher_usertype');
               $teacher_lesson=MySQL_result($sql,$a,'teacher_lesson');
               $date=MySQL_result($sql,$a,'date');

               //$classdry_id=MySQL_result($sql,$a,'date');
               $date=MySQL_result($sql,$a,'date');
             ?>
                      <tbody>
                        <tr>
                          <td><?php echo $teacher_firstname ?></td>
                          <td><?php echo $teacher_lastname ?></td>
                          <td><?php echo $teacher_email ?></td>


                        <td>
                    <a type="button"  href="?id=<?php echo $id; ?> " name="delete" class="btn btn-danger btn-md">
                          Delete
                        </button>
                      </td>
                          <?php

                          ?>
                        <td><a type="button" href="update_profile.php?id=<?php echo $id; ?>" name="edit" class="btn btn-primary btn-md">Update Profile</button></td>
                          <td>
                             <!-- <a type="button" href="?id=<?php //echo $id; ?>" name="view_activity" class="btn btn-success btn-md">View Activity</button></td> -->
                          </td>
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
  <!--modals-->
  <!--modals for class daily report-->
        <div class="modal fade" id="addclassdaily" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
           <form>
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal">&times;</button>
                   <h4 class="modal-title" id="myModalLabel"> <b><u>classdaily Report</u></b> </h4>
          </div>
          <div class="modal-body">
                <div class="form-group">
                      <label>Page Title</label>
                          <input type="text" class="form-control" placeholder="add same title">
                  </div>
            <div class="form-group">
                  <label>page body</label>
                    <textarea name="editor" class="form-control" placeholder="page boby"></textarea>
                </div>
              <div class="checkbox">
                  <label>
                      <input type="checkbox"> Publisher</label>
                  </div>
             <div class="form-group">
                  <label>Meta Tags</label>
                    <input type="text" class="form-control" placeholder="add same tags...">
                </div>
             <div class="form-group">
                        <label>Meta Desscription</label>
                          <input type="text" class="form-control" placeholder="add same tags...">
                    </div>
            </div>
            <div class="modal-footer">
               <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">save changes</button>
            </div>
          </form>
          </div>

        </div>
        </div>

        </div>

        <!-- <footer id="footer">
           <p id="paragraph">Done by RUKOTANA Ange Frederic, &copy; 2017</p>
         </footer> -->

        <!--modals for session plan report-->
        <div class="modal fade" id="addsessionplan" role="dialog">
      <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title"><b><u>Session Plan Report</u></b></h4>
          </div>
          <div class="modal-body">

            <div class="form-group">
              <label>Report Title</label>
              <input type="text" class="form-control" placeholder="add same title">
            </div>
            <div class="form-group">
              <label>Report body</label>
              <textarea name="editor" class="form-control" placeholder="page boby"></textarea>
            </div>
            <div class="checkbox">
              <label>
              <input type="checkbox"> Publisher</label>
            </div>
             <div class="form-group">
               <label>Meta Tags</label>
               <input type="text" class="form-control" placeholder="add same tags...">
             </div>
             <div class="form-group">
              <label>Meta Desscription</label>
              <input type="text" class="form-control" placeholder="add same tags...">
             </div>


          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">save changes</button>
          </div>
        </div>

      </div>
      </div>

      </div>


      <script>
        CKEDITOR.replace('editor1')
      </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
