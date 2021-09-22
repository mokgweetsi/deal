<?php 
session_start();
include_once("includes/db.php");
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:dashboard.php');
}
else{
if(isset($_POST['submit']))
{
$name=$_POST['name'];
$position=$_POST['position'];
//$description=$_POST['description'];
$contact=$_POST['contact'];
//$email=$_POST['email'];
//$team_image=['team_image'];

$sql=mysql_query($con,"insert into team (teamname,title,phone) values ('$name','$position','$contact')");
if($sql)
{
echo"<script>alert('team member was added successfully ');</script>";
}
else{
echo"<script>alert ('Something went wrong . Please try again.');</script>";    
} 

}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
      
<title>DEAL ACT INVESTMENT | Add Team</title>
        <!-- App css -->
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/core.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/components.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/menu.css" rel="stylesheet" type="text/css" />
        <link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="../plugins/switchery/switchery.min.css">
        <script src="assets/js/modernizr.min.js"></script>

    </head>


    <body class="fixed-left">

        <!-- Begin page -->
        <div id="wrapper">

<!-- Top Bar Start -->
 <?php include('includes/topheader.php');?>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->
           <?php include('includes/leftsidebar.php');?>
 <!-- Left Sidebar End -->

    <div class="content-page">
                <!-- Start content -->
                <div class="content">
                    <div class="container">


                        <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Team Member</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Team </a>
                                        </li>
                                        <li class="active">
                                            Add Team
                                        </li>
                                    </ol>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                        <div class="row">
                            <div class="col-sm-12">
                                <div class="card-box">
                                    <h4 class="m-t-0 header-title"><b>Add Team </b></h4>
                                    <hr />
                                


<div class="row">
<div class="col-sm-6">  
<!---Success Message--->  
<?php if($msg){ ?>
<div class="alert alert-success" role="alert">
<strong>Well done!</strong> <?php echo htmlentities($msg);?>
</div>
<?php } ?>

<!---Error Message--->
<?php if($error){ ?>
<div class="alert alert-danger" role="alert">
<strong>Oh snap!</strong> <?php echo htmlentities($error);?></div>
<?php } ?>


</div>
</div>





                                    <div class="row">
                                        <div class="col-md-6">
                                             <!--form class="form-horizontal" name="team_image" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Team Member Image</label>
                                                    <div class="col-md-10">
                                                        <input type="file" class="form-control" value="" name="team_image" required>
                                                    </div>
                                                </div-->
                                            <form class="form-horizontal" name="name" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Team Member</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="name" required>
                                                    </div>
                                                </div>
                                         
                                                 <form class="form-horizontal" name="position" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Position</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="position" required>
                                                    </div>
                                                </div>
                                                
                                                   <form class="form-horizontal" name="contact" method="post">
                                                <div class="form-group">
                                                    <label class="col-md-2 control-label">Contact</label>
                                                    <div class="col-md-10">
                                                        <input type="text" class="form-control" value="" name="contact" required>
                                                    </div>
                                                </div>
                                                 
                                                
                                                

        <div class="form-group">
                                                    <label class="col-md-2 control-label">&nbsp;</label>
                                                    <div class="col-md-10">
                                                  
                                                <button type="submit" class="btn btn-custom waves-effect waves-light btn-md" name="submit">
                                                    Submit
                                                </button>
                                                    </div>
                                                </div>

                                            </form>
                                        </div>


                                    </div>


                                </div>
                            </div>
                        </div>
                        <!-- end row -->


                    </div> <!-- container -->

                </div> <!-- content -->


<?php include('includes/footer.php');?>

            </div>
        </div>

        <script>
            var resizefunc = [];
        </script>

        <!-- jQuery  -->
        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/detect.js"></script>
        <script src="assets/js/fastclick.js"></script>
        <script src="assets/js/jquery.blockUI.js"></script>
        <script src="assets/js/waves.js"></script>
        <script src="assets/js/jquery.slimscroll.js"></script>
        <script src="assets/js/jquery.scrollTo.min.js"></script>
        <script src="../plugins/switchery/switchery.min.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

    </body>
</html>
<?php } ?>