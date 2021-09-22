<?php
include_once("includes/db.php");
if(isset($_POST['submit']))
{
// Posted Values    
$stype=$_POST['title'];
$sdescription=$_POST['role'];
$imgfile=$_FILES["image"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".JPG",".JPG",".JPEG",".PNG",".GIF",".jpg","jpeg",".png",".gif");
// Validation for allowed extensions
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
echo "<script>window.location.href='#'</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;  
// Code for move image into directory
move_uploaded_file($_FILES['image']['tmp_name'],"just/".$imgnewfile);
// Query for insertion data into database  
$query = mysqli_query($con,"insert into tblservice(type,description,Image) values ('$stype','$sdescription','$imgnewfile')");
if($query)
{
echo "<script>alert('Data inserted successfully');</script>";
echo "<script>window.location.href='#'</script>";
}
else
{
echo "<script>alert('Data not inserted');</script>";
echo "<script>window.location.href='#'</script>";
}}

}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DEAL ACT INVESTMENT| Add Service</title>
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
    <div id="wrapper">
        <?php include('includes/topheader.php');?>
        <?php include('includes/leftsidebar.php');?>

        <div class="content-page">
            <div class="content">
                <div class="container">
                       <div class="row">
                            <div class="col-xs-12">
                                <div class="page-title-box">
                                    <h4 class="page-title">Add Member</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Service </a>
                                        </li>
                                        <li class="active">
                                            Add Service
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
                                    <h4 class="m-t-0 header-title"><b>Add Service </b></h4>
                                    <hr />


 <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Service</h3>
        

<form name="uploadimage" enctype="multipart/form-data" method="post">
<table width="100%"  border="0">
<tr>
<th width="26%" height="60" scope="row">Type:</th>
<td width="74%"><input type="text" name="title" autocomplete="on" class="form-control" required /></td>
</tr>
<tr>
<th width="26%" height="60" scope="row">Description:</th>
<td width="74%"><input type="text" name="role" autocomplete="on" class="form-control" row= "5"  required /></td>
</tr>
<tr>
<th height="60" scope="row">Upload Image :</th>
<td><input type="file" name="image"  required /></td>
</tr>

<tr>
<th height="60" scope="row">&nbsp;</th>
<td><input type="submit" value="Submit" name="submit" class="btn-primary" /></td>
</tr>
</table>
</form>
 
      </div>
    </div>
    <hr>
         </div><!--/center-->


</div>
</div>
                    
                </div>
                
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

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>
        <!-- Select 2 -->
        <script src="../plugins/select2/js/select2.min.js"></script>
        <!-- Jquery filer js -->
        <script src="../plugins/jquery.filer/js/jquery.filer.min.js"></script>

        <!-- page specific js -->
        <script src="assets/pages/jquery.blog-add.init.js"></script>

        <!-- App js -->
        <script src="assets/js/jquery.core.js"></script>
        <script src="assets/js/jquery.app.js"></script>

        <script>

            jQuery(document).ready(function(){

                $('.summernote').summernote({
                    height: 240,                 // set editor height
                    minHeight: null,             // set minimum height of editor
                    maxHeight: null,             // set maximum height of editor
                    focus: false                 // set focus to editable area after initializing summernote
                });
                // Select2
                $(".select2").select2();

                $(".select2-limiting").select2({
                    maximumSelectionLength: 2
                });
            });
        </script>
  <script src="../plugins/switchery/switchery.min.js"></script>

        <!--Summernote js-->
        <script src="../plugins/summernote/summernote.min.js"></script>


</body>
</html>