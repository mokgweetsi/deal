<?php
session_start();
include('includes/db.php');
error_reporting(0);
if(strlen($_SESSION['login'])==0)
  { 
header('location:dashboard.php');
}
else{

if(isset($_POST['submit']))
{
$teamname=$_POST['teamname'];
$position=$_POST['position'];
$description=$_POST['description'];
$contact=$_POST['contact'];
$email=$_POST['email'];
$status=1;
//picture coding
$picture_name=$_FILES['picture']['name'];
$picture_type=$_FILES['picture']['name'];
$picture_tmp_name=$_FILES['picture']['tmp_name'];
$picture_size=$_FILES['picture']['size'];
if($picture_type=="image/jpeg"||$picture_type=="image/png"||$picture_type=="image/jpg" || $picture_type=="image/gif"){
    if($picture_size<=50000000)
    //$pic_name=time() '#' $picture_name;
    move_uploaded_file($picture_tmp_name, "../images".$pic_name);
    $query=mysqli_query($con,"insert into team(team_image,name,position,description,contact,email,is_cctive) values($pic_name,'$name','$position','$description','$contact','$email','$status')");
    header("location:sumit_form.php?success=1") ;  
}

if($query)
{
$msg="Service is added ";
}
else{
$error="Something went wrong . Please try again.";    
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