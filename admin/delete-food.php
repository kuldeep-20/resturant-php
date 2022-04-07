<?php

include('../config/constants.php');

if(isset($_GET['id']) && isset($_GET['image_name']))
{

    $id=$_GET['id'];
    $image_name = $_GET['image_name'];

    if($image_name != "")
    {
        $path = "../images/food/".$image_name;

        $remove = unlike($path);

        if($remove==false)
        {
            $_SESSION['upload'] =  "<div class='error'>Failed to Delete,try again later.</div>";
            header('location:'.SITEURL.'admin/manage-food.php');
            die();

        }
    }
    $sql = "DELETE FROM tbl_admin WHERE id=$id";

    $res = mysqli_query($conn,$sql);
    if($res==true)
{
   // echo "admin deleted";
   //ctreating session
   $_SESSION['delete'] = "<div class='success'>Food Deleted Successfully.</div>";
   //redirect
   header('location:'.SITEURL.'admin/manage-food.php');
}
else{
   // echo "failed to delete";
   $_SESSION['unauthorize'] = "<div class='error'>Failed to Delete .</div>";
   //redirect
   header('location:'.SITEURL.'admin/manage-food.php');
  
}



}
else
{
    $_SESSION['delete'] =  "<div class='error'>Unauthorized .</div>";
    header('location:'.SITEURL.'admin/manage-food.php'); 
}
?>

























