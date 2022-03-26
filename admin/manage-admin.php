<?php include('partials/menu.php');  ?>

         <!--main-content section starts--> 
         <div class="main-content">
             <div class="wrapper">
             <h1>Manage Admin</h1>

             <br>

             <?php
             if(isset($_SESSION['add']))
             {
                 echo $_SESSION['add'];
                 unset($_SESSION['add']);//removing session message
             }
             ?>

             <br><br>

             <!--Button to add admin-->
             <a href="add-admin.php" class="btn-primary">Add Admin</a>
             <br><br><br>
            <table class = "tbl-full">
                 <tr>
                     <th>S.N</th>
                     <th>Full Name</th>
                     <th>Username</th>
                     <th>Actions</th>
                 </tr>

                 <?php
                 //to get all admin
                 $sql = "SELECT *FROM tbl_admin";

                 //executing query
                 $res = mysqli_query($conn,$sql);

                 //checking query is executed or not

                 if($res==TRUE)
                 {
                   //  $count = mysqli_num_rows($res);
                     $count = mysqli_num_rows($res);
                     $sn=1;
                     if($count>0)
                     {
                         while($rows=mysqli_fetch_assoc($res))
                         {
                             $id=$rows['id'];
                             $full_name=$rows['full_name'];
                             $username=$rows['username'];

                             ?>
                             <tr>
                                 <td><?php echo $sn++;?></td>
                                 <td><?php echo $full_name; ?></td>
                                 <td><?php echo $full_name; ?></td>
                                 <td>
                                     <a href="#" class="btn-secondary">Update Admin</a>
                                     <a href="#" class="btn-danger">Delete Admin</a>
                                 </td>
                             </tr>

 
    

                             <?php
                         }


                     }
                     else
                     {

                     }
                 }
                 ?>
                
             </table>

            
         </div>
         <!--main-content section ends-->

         <?php include('partials/footer.php')?>
