<?php 
session_start();
include('includes/config.php');
error_reporting(0);


if(strlen($_SESSION['logon']==0)
{
    header('location:index.php')
}else{
    if(isset('add')){
        $fname='fname';
        $lname='lname';
        $role='role';
        $contact='contact';
        $image= $_FILES['image']['name'];
        $ext=$_FILES['image']['type'];
        $validExt= array("image/gif", "image/jpeg", "image/pjpeg","image/png");
        if(empty($image)){
            echo "<script>alert('Attach an image');</script>";
        }else if ($_FILES['image']['size']<= 0 || $_FILES['image']['size'] > 102400) {
            echo "<script>alert('improper image size');</script>";
        }elseif (!in_array($ext, $validExt)) {
           echo"<script>alert('invalid image');</script>;"
        }else{
            $folder='../admin/postimages/';
            $imgext=strtolower(pathinfo($image,PATHINFO_EXTENSION));
            $picture=rand(1000, 1000000).'.'.$imgext;
            if (move_uploaded_file($_FILES['image']['tmp_name'], $folder.$picture)) {
                $query= "INSERT INTO team(firstname,lastname,position,phone,image) VALUES('$lname','$lname','$role','$contact','$picture')";
                $result=mysql_query($con,$query) or die (mysql_error($con));
                if(mysql_affected_rows($con)>0){
                	echo"<script>alert('member added successfully');</script>";
                }else {
                	"<script> alert('error while adding member');</script>";
                }

            }
        }

    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>DEAL ACT INVESTMENT| Add Member</title>
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
<body>

</body>
</html>
