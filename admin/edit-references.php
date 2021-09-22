<?php
include 'includes/dbconfig.php';
session_start();
error_reporting(0);
if (strlen($_SESSION['login'])==0) {
    header('Location:index.php');
}
else{
    if (isset($_POST['update'])) {

        //$subcatid=intval($_GET['scid']);    
// Posted Values  
$imgid = $_POST['uid'];
$imgname=$_POST['name'];
$imgcontact=$_POST['contact'];
$imgplace=$_POST['place'];
$imgfile=$_FILES["image"]["name"];
// get the image extension
$extension = substr($imgfile,strlen($imgfile)-4,strlen($imgfile));
// allowed extensions
$allowed_extensions = array(".jpg",".jpeg",".png",".gif", ".JPG",".JPEG",".GIF",".PNG");
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
$sql="update tblreferences set clientname=:name, phone=:contact, clientplace=:place, image=:image where id=:uid   ";
$query=$con->prepare($sql);
$query->bindParam(':name',$imgname,PDO::PARAM_STR);
$query->bindParam(':contact',$imgcontact,PDO::PARAM_STR);
$query->bindParam(':place',$imgplace,PDO::PARAM_STR);
$query->bindParam(':image',$imgnewfile,PDO::PARAM_STR);
$query->execute();
$msg="information updated successfully";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>DEAL ACT INVESTMENT| Edit Reference</title>
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
                                    <h4 class="page-title">Edit Reference</h4>
                                    <ol class="breadcrumb p-0 m-0">
                                        <li>
                                            <a href="#">Admin</a>
                                        </li>
                                        <li>
                                            <a href="#">Reference </a>
                                        </li>
                                        <li class="active">
                                            Edit Reference
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
                                    <h4 class="m-t-0 header-title"><b>Edit Reference </b></h4>
                                    <hr />

<div class="row">
                            <div class="col-md-10">
                                <div class="panel panel-default">
                                    <div class="panel-heading">Form fields</div>
                                    <div class="panel-body">
                                        <form method="post" name="chngpwd" class="form-horizontal" onSubmit="return valid();">
                                        
                                            
                  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo ($error); ?> </div><?php } 
                else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo ($msg); ?> </div><?php }?>
                <?php $sql = "SELECT * from  tblreferences ";
$query = $con -> prepare($sql);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;
if($query->rowCount() > 0)
{
foreach($results as $result)
{               ?>  

                <div class="form-group">
                                                <label class="col-sm-4 control-label"> Name</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="name" id="name" value="<?php echo ($result->clientname);?>" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Phone</label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" name="contact" id="contact" value="<?php echo ($result->phone);?>" required>
                                                </div>
                                            </div>
<div class="form-group">
                                                <label class="col-sm-4 control-label"> Place </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control" value="<?php echo ($result->clientplace);?>" name="place" id="place" required>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-4 control-label"> Image </label>
                                                <div class="col-sm-8">
                                                    <img class="img-responsive" src="admin/just<?php echo htmlentities($result->image);?>" alt="Photo">
                                                    <input type="file" class="form-control" name="image" id="image" required>
                                                </div>
                                            </div>
<?php }} ?>
                                            <div class="hr-dashed"></div>
                                            
                                        
                                
                                            
                                            <div class="form-group">
                                                <div class="col-sm-8 col-sm-offset-4">
                                
                                                    <button class="btn btn-primary" name="update" type="submit">Update</button>
                                                </div>
                                            </div>

                                        </form>

                                    </div>
                                </div>
                            </div>
                            
                        </div>
                        
                    

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
<?php } ?>