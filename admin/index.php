<?php include('partials/menu.php'); ?>

         <!--main-content section starts-->
         <div class="main-content">
             <div class="wrapper">
             <h1>DASHBOARD</h1>
             <?php
    
                 if(isset($_SESSION['login']))
                 {
                       echo $_SESSION['login'];
                       unset ($_SESSION['login']);
                  }
            ?>
            <br><br>
 
             <div class="col-4 text-center">
                 <h1>5</h1>
                 <br>
                 CATEGORIES
             </div>

             <div class="col-4 text-center">
                 <h1>5</h1>
                 <br>
                 CATEGORIES
             </div>

             <div class="col-4 text-center">
                 <h1>5</h1>
                 <br>
                 CATEGORIES
             </div>

             <div class="col-4 text-center">
                 <h1>5</h1>
                 <br>
                 CATEGORIES
             </div>

             </div>
             <div class="clearfix"></div>
            
         </div>
         <!--main-content section ends-->

<?php include('partials/footer.php')?>