<?php session_start();
if (!isset($_SESSION['username']) and $_SESSION['usertype'] != 'admin') {
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
                      </h2><h3><a href="classdaily.php">Classdairy</a></h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-file"></span>
                      </h2><h3><a href="session_plan.php" class="session_plan_button">Session Plan</a></h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-envelope"></span>
                      </h2><h3><a href="#.php"> Email</a></h3>
                     </div>
                   </div>
                   <div class="col-md-3">
                     <div class="well dash-box">
                      <h2><span class="glyphicon glyphicon-list-alt"></span>
                      </h2><h3><a href="#.php">Activity Lists</a></h3>
                     </div>
                   </div>
               </div>
             </div>
            <div class="panel panel-default">
                   <div class="panel-heading">Panel Heading</div>
                    <div class="panel-body">
                     <form class="" action="backend/session_plan_regitration.php" method="post">


                       <table border="0px sonlid blanck" class="table table-striped table-hover table_object_color ">
                         <!--<form class="" action="backend/sessionplan_regitration.php" method="POST">-->
                         <tr>
                           <td border="1px solid black" colspan="5" align="center">
                             <img src="logos/capture.jpg" alt=""  />
                           <!--</td> <td></td><td>in</td><td>wda</td></tr>-->
                           <tr>
                             <td colspan="5" align="center">
                             SESSION PLAN
                             </td>
                             <tr>
                               <td>
                                   <b>trainer name:</b><u><b><?php //echo $_SESSION['username']; ?></b></u>
                               </td>
                               <td>
                                 <b>sector</b>:<input type="text" name="sector" 	class="form-control" value="" required="">
                               </td>
                               <td>
                                 <b>No.of students</b>:<input type="text"  	class="form-control" name="no_std" value="" required="">
                               </td>
                               <td>
                               <b>Date</b>:<?php $a=getdate();
                               printf('%s %d, %d',$a['month'],$a['mday'],$a['year']); ?>
                               </td>
                               <td>
                                 <b>time</b>:<input type="text" 	class="form-control" name="time" value="" required="">
                               </td>
                             </tr>
                           <tr>
                             <td>
                               <b>Institution</b>:ETSK_MUSHA
                             </td>
                             <td>
                               <b>class:</b><input type="text" 	class="form-control" name="class" value="" required="">
                               <td>
                                 <b>week:</b><input type="text" 	class="form-control" name="week" value="" required="">
                               </td>
                               <td  colspan="2">
                                 Trade:<input type="text" 	class="form-control" name="trade" value="" required="">
                               </td>
                             </td>
                           </tr>
                           </tr>
                         </tr>
                       </table>

                        <table border="0px sonlid blanck" class="table table-striped table-hover">
                          <tr>
                           <td  colspan="2" >
                             Module(code & Name):<input type="text" 	class="form-control"name="name" value="" required=""><br>
                             <b>LU:</b><input type="text" 	class="form-control" name="lu" value="" required="">
                           </td>

                           <td>
                             learning place:<input type="text" 	class="form-control"	class="form-control" name="learnig_place" value="" required=""><br>
                             Room arrangement: U shape
                           </td>
                          </tr>
                          <tr>
                          <td colspan="3">
                            <b>specific Objectives:</b><input type="text" 	class="form-control" name="sp_obj" value="" required="">
                          </td>
                          </tr>
                          <tr>
                           <td colspan="2"><b> Teaching Aids:</b><input type="text" 	class="form-control" name="tch_aids" value="" required=""></td>
                          </tr>
                          <td colspan="2">
                          </td>
                          <td>
                            Time Estimate
                          </td>
                          <tr>
                            <td colspan="2">
                             PRSENTATION:<br><input type="text" 	class="form-control" name="presentation" value="" required="">
                             <b>Introdution:-</b>
                           </td>
                            <td><br>
                              <input type="text" name="presnt_time_estimate" 	class="form-control" value="" required="">
                            </td>
                            </tr>
                            <tr>
                            <td colspan="2">
                              <b>Development:</b><br>
                              <textarea name="dev" 	class="form-control" rows="5" cols="35" required=""></textarea>
                            </td>
                            <td><br>
                              <textarea name="dev_time_estimate" 	class="form-control" rows="5" cols="35" required=""></textarea>
                            </td>
                         </tr>
                         <tr>
                           <td colspan="2"><b>conclusion:</b><br>
                           <textarea name="conclusion" 	class="form-control" rows="5" cols="40" required=""></textarea></td>
                             <td><br>
                               <textarea name="concln_time_estimate" 	class="form-control" rows="5" cols="35" required=""></textarea>
                             </td>
                         </tr>
                         <tr>
                           <td colspan="2">
                             <b>Evaulation:</b><input type=text 	class="form-control" name="evaluation" value="" required="">
                           </td>
                           <td><br>
                             <input type="text" 	class="form-control" name="evl_time_estimate" value="" required="">
                           </td>
                         </tr>
                         <tr>
                           <td colspan="2">
                             <b>Assessement Homework:class group work</b><br><input type=text 	class="form-control" name="ass_hw_clls"
                             value="" required="">
                           </td>
                           <td><br>
                             <input type="text" 	class="form-control" name="ass_hw_clls_estm" value="" required="">
                           </td>
                         </tr>
                         <tr>
                           <td colspan="2">
                             <b>References: Teacher Notes <br> internet <br>
                             </b><input type=text 	class="form-control" name="refe_tch_nts" value="" required="">
                           </td>
                           <td><br><br>
                             <input type="text" 	class="form-control" name="refe_tch_nts_estm" value="" required="">
                           </td>
                         </tr>
                         <tr>
                           <td colspan="2">
                             <b>Remarks:</b><input type=text 	class="form-control" name="remarks" value="" required="">
                           </td>
                           <td><br>
                             <input type="text" 	class="form-control" name="remks_time_estimate" value="" required="">
                           </td>
                         </tr>
                        </table>
                      </table>
                      <input type="reset" name="ssion_pln" value="Reset Session Form" class="btn btn-default btn-block btn-lg" required="">
                       <input type="submit" name="ssion_pln" value="Submit Session Form" class="btn btn-primary btn-block btn-lg" required="">
                            </form>



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
