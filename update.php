<?php session_start();
if (!isset($_SESSION['username']) and $_SESSION['usertype'] != 'dos') {
  header("location:login.php"); }

 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TEACHER || PANNEL</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  </head>
  <body>




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
                   <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body">
                    <!-- <form class="" action="backend/classdaily_registration.php" method="post">-->
                      <div class="table-responsive">
                        <table class="table table-striped table-hover">
                          <tr>
                            <th class="info"><!--<button type="button" class="btn btn-primary" value="SUNDAY">SUNDAY</button>-->Sunday</th>
                            <th class="warning">On The</th>
                            <th class="success">12/12/2k12</th>
                          </tr>
                        </table>
                        <table class="table table-striped table-hover">
                           <thead>
                             <tr>
                               <th>Time</th>
                               <th>Branch</th>
                               <th>Matters</th>
                               <th>Subject</th>
                               <th>Application</th>
                               <th>Observation</th>
                             </tr>
                           </thead>
                           <tbody>
                             <?php
                             $con=MySQL_connect("localhost","root","");
                             $db=MySQL_select_db("project");
                             if (!$db) { echo "failed to connect to database".MySQL_error();
                             }
                             if (!$con) {
                               echo "fails to connect database!!".MySQL_error();
                             }



                              ?>
                         <form class="" action="backend/update_registration.php" method="POST">
                             <tr>
                               <?php
                                 if(!empty($_GET['id'])){
                                   $id = $_GET['id'];
                                   $sql=mysql_query("select * from classdaily where classdairy_id='$id' ");
                                   $x= mysql_num_rows($sql);

                                  $data = mysql_fetch_assoc($sql);
                                  // var_dump($data);
                                ?>

                                <td><?php echo $data['hours']; ?>:</td>
                                <input type="hidden" name="hour" value="<?php echo $data['hours']; ?>">
                               <td><input type="text" class="form-control"  name="branch" value="<?php echo $data['branch']; ?>"></td>
                               <td><input type="text" class="form-control" name="matters" value="<?php echo $data['matters']; ?>"></td>
                               <td><input type="text" class="form-control" name="subject" value="<?php echo $data['subject']; ?>"></td>
                               <td><input type="text" class="form-control" name="app" value="<?php echo $data['application']; ?>"></td>
                               <td><input type="text" class="form-control" name="obs" value="<?php echo $data['observation']; ?>"></td>
                               <td><input type="submit" name="first_h" value="Update" class="btn btn-info"></td>
                             </tr>
                            <?php } ?>
                                <?php  ?>
                           </form>

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
