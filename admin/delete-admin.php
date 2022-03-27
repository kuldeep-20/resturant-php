<?php
//including constant.php
include('../config/constants.php');

//geting id from admin
$id=$_GET['id'];

//creating sql query
$sql = "DELETE FROM tbl_admin WHERE id=$id";

//executte query
$res = mysqli_query($conn,$sql);

//checking query is executed or  not
if($res==true)
{
   // echo "admin deleted";
   //ctreating session
   $_SESSION['delete'] = "<div class='success'>Admin Deleted Successfully.</div>";
   //redirect
   header('location:'.SITEURL.'admin/manage-admin.php');
}
else{
   // echo "failed to delete";
   $_SESSION['delete'] =  "<div class='error'>Failed to Delete,try again later.</div>";
   header('location:'.SITEURL.'admin/manage-admin.php');
}
?>
<div class="success"></div>