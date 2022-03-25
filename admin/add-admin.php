<?php include('partials/menu.php'); ?>
<div class="main-content">
    <div class="wrapper">
        <h1>Add Admin</h1>

        <br><br>
        <form action=""method="POST">
            <table class="tbl-30">
                <tr>
                    <td>Full Name :</td>
                    <td><input type="text" name="full_name" placeholder="enter your name"></td>
                </tr>

                <tr>
                    <td>Username :</td>
                    <td><input type="text" name="username" placeholder="enter your username"></td>
                </tr>

                <tr>
                    <td>Password</td>
                    <td><input type="password" name="password" placeholder="enter your password"></td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="submit" name="submit" value="add admin" class="btn-secondary">
                    </td>
                </tr>

            </table>
        </form>
    </div>
</div>
<?php include('partials/footer.php') ?>

<?php 
//process value and save in dbms

//cheaking submit button

if(isset($_POST['submit']))
{
    //button clicked
    //echo "button clicked";

    //getting data from form
    $full_name = $_POST['full_name'];
    $username = $_POST['username'];
    $password =md5($_POST['password']); //password encypting


    //sql query for saving data into database

    $sql = "INSERT INTO tbl_admin SET
    full_name='$full_name',
    username='$username',
    password='$password'";

///executing query and saving data into database
   $res = mysqli_query($conn,$sql) or die(mysqli_error());


   // checking weather executed data is inserted or not

   if($res==TRUE)
   {
       //creating session variable to display
      $_SESSION['add'] = "Admin Added Successfully";

       ///redirecting
       header("location:".SITEURL.'admin/manage-admin.php');

   }
   else{
    $_SESSION['add'] = "Failed to add admin";

    ///redirecting
    header("location:".SITEURL.'admin/add-admin.php');

   }



}

?>