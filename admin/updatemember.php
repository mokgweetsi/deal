<?php
// include database connection file
require_once'includes/dbconfig.php';
if(isset($_POST['update']))
{
// Get the userid
if(isset($_GET['id']));
{
// Posted Values  
$imgtitle=$_POST['imagetitle'];
$imgrole=$_POST['role'];
$imgcontact=$_POST['contact'];
$imgfile=$_FILES["image"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg","jpeg",".png",".gif");
// Validation for allowed extensions
if(!in_array($extension,$allowed_extensions))
{
echo "<script>alert('Invalid format. Only jpg / jpeg/ png /gif format allowed');</script>";
}
else
{
//rename the image file
$imgnewfile=md5($imgfile).$extension;  
// Code for move image into directory
move_uploaded_file($_FILES['image']['tmp_name'],"just/".$imgnewfile);

// Query for Query for Updation
$sql="update tblimages set imagestitle=:it,position=:pos, phone=:phon, image=:img where id=:uid";
//Prepare Query for Execution
$query = $dbh->prepare($sql);
// Bind the parameters
$query->bindParam(':it',$imagetitle,PDO::PARAM_STR);
$query->bindParam(':pos',$imgrole,PDO::PARAM_STR);
$query->bindParam(':phon',$imgcontact,PDO::PARAM_STR);
$query->bindParam(':img',$imgnewfile,PDO::PARAM_STR);
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
// Query Execution
$query->execute();
// Mesage after updation
echo "<script>alert('Record Updated successfully');</script>";
// Code for redirection
echo "<script>window.location.href='index.php'</script>"; 
}
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DEAL ACT INVESTMENT| Add member</title>
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
                                            <a href="#">Member </a>
                                        </li>
                                        <li class="active">
                                            Add Member
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
                                    <h4 class="m-t-0 header-title"><b>Add Member </b></h4>
                                    <hr />


 <!--center-->
  <div class="col-sm-6">
    <div class="row">
      <div class="col-xs-12">
        <h3>Member Addition</h3>
        
        
<?php 
// Get the userid
$userid=isset($_GET['id']);
$sql = "SELECT imagetitle,position,phone,image,PostingDate,id from tblimages where id=:uid";
//Prepare the query:
$query = $con->prepare($sql);
//Bind the parameters
$query->bindParam(':uid',$userid,PDO::PARAM_STR);
//Execute the query:
$query->execute();
//Assign the data which you pulled from the database (in the preceding step) to a variable.
$results=$query->fetchAll(PDO::FETCH_OBJ);
// For serial number initialization
$cnt=1;
if($query->rowCount() > 0)
{
//In case that the query returned at least one record, we can echo the records within a foreach loop:
foreach($results as $result)
{               
?>

<form name="insertrecord" method="post">
<div class="row">
<div class="col-md-4"><b>Name</b>
<input type="text" name="imagetitle" value="<?php echo htmlentities($result->imagestitle);?>" class="form-control" required>
</div>
<div class="col-md-4"><b>Position</b>
<input type="text" name="role" value="<?php echo htmlentities($result->position);?>" class="form-control" required>
</div>
</div>

<div class="row">
<div class="col-md-4"><b>Phone</b>
<input type="text" name="contact" value="<?php echo htmlentities($result->phone);?>" class="form-control" maxlength="10" required>
</div>

<div class="col-md-4"><b>Upload Image</b>
<input type="file" name="image" value="<?php echo htmlentities($result->image);?>" class="form-control"  required>
</div>
</div>  
 
<?php }} ?>

<div class="row" style="margin-top:1%">
<div class="col-md-8">
<input type="submit" name="update" value="Update">
</div>
</div> 
     </form>
            
      
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