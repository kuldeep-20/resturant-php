<?php

include('../config/constants.php');
//echo "delete";
if(isset($_GET['id']) AND isset($_GET['image_name']))
{
    //echo "Get Value and Delete";
    $id = $_GET['id'];
    $image_name = $_GET['image_name'];

    if($image_name != "")
    {
        $path = "../images/category/".$image_name;

        $remove = unlike($path);

        if($remove==false)
        {
            $_SESSION['remove'] = "<div class='error'>Fail to remove.</div>";

            header('location:'.SITEURL.'admin/manage-category.php');

            die();
        }
    }
    $sql = "DELETE FROM tbl_category WHERE id=$id";

    $res = mysqli_query($conn, $sql);

    if($res==true)
    {
        $_SESSION['delete'] = "<div class='success'>Category Deleted Successfully.</div>";

        header('location:'.SITEURL.'admin/manage-category.php');

    }
    else
    {
        $_SESSION['delete'] = "<div class='error'>Fail to delete.</div>";

        header('location:'.SITEURL.'admin/manage-category.php');
    }

}
else
{
    header('location:'.SITEURL.'admin/manage-category.php');

}

?>