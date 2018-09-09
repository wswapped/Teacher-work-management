<?php session_start();
if (!isset($_SESSION['teacher_username']) and $_SESSION['techer_usertype'] != 'teacher') {
  header("location:login.php");
 }

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

        //  $delete_record=mysql_query("delete from classdaily where id='$id' ");
        //  if (!$delete_record) {
        //    echo "query deleted".mysql_error();
        //  }
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
                  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-list-alt"></span>
                    Teachers's List</a>
                  <a href="#" class="list-group-item"><span class="glyphicon glyphicon-book"></span>
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


         <div class="panel panel-default">
              <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span>
              Date of Activities </div>
              <h3 class="panel-title"></h3>

              <div class="panel-body">
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
         <div class="panel panel-default teacher_activity_table">
              <div class="panel-heading"><span class="glyphicon glyphicon-list-alt"></span>
              Date of Activities </div>
              <h3 class="panel-title"></h3>

              <div class="panel-body">
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
                   if(!empty($_GET['teacher_id'])){
                     $id = $_GET['teacher_id'];

                     var_dump($id);

                     $view_record=mysql_query("select from classdaily where id='$id' ");
                     if (!$view_record) {
                       echo "query deleted".mysql_error();
                     }
                    }


             $teacher_names=mysql_query("select distinct teacher_firstname,teacher_lastname from teachers_identifications");

           if (!$teacher_names) {
             echo " query failed ".mysql_error();
           }
           $counter = 0;
            while($data = mysql_fetch_assoc($teacher_names))
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
                        <?php echo $data['teacher_firstname'];   ?>
                      </td>
                      <td>
                          <?php echo $data['teacher_lastname'];   ?>
                      </td>
                      <td>
                        <a type="button" id="" href="?date=<?php echo $data['id'];   ?>" class="btn btn-success btn-md">view activities</a>
                      </td>
                    </tr>

                       <?php
                       }
                      ?>

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

        <footer id="footer">
           <p id="paragraph">Done by RUKOTANA Ange Frederic, &copy; 2017</p>
         </footer>

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
        </div>

      </div>
      </div>

      </div>


      <script>
        // CKEDITOR.replace('editor1')
      </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
