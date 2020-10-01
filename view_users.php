<!----------------------------------------------------copy from view_customers.php------------------->
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<!----------------------------------Dashboard--------------------------------------------->
<div class="row"><!--class="row" 1begin --->
    <div class="col-lg-12"> <!--class="col-lg-12" begin --->
       <ol class="breadcrumb" style="background-color: Gold;"><!--class="breadcrumb" begin --->
        <li class="active"><!--class="active" begin --->
            <i class="fa fa-dashboard" style="font-size:28px;color:red"></i>Dashboard / view Users
        
        </li><!--class="active" end --->
        </ol><!--class="breadcrumb" end --->
    </div><!--class="col-lg-12 breadcrumb" end --->
</div><!--class="row"1 end --->
<!----------------------------------View users--------------------------------------------->
<div class="row"><!--class="row"2 begin --->
<div class="col-lg-12"> <!--class="col-lg-12" begin --->
    <div class="panel panel-default" style="background-color: Cyan;"><!--class="panel panel-default" begin -->
        <div class= "panel-hading" style="font-size:28px;color:gold"><!--class="palnel-hading" begin --->
            <h3 class ="palnel-title" ><!--class="palnel-title" begin --->
                <i class="fa fa-tags" style="font-size:28px;color:red"></i> View Users
           </h3><!--class="palnel-title" end --->
        </div><!--class="palnel-hading" end --->
        
        <div class="panel-body"><!--class="panel-body" begin --->
            <div class="table-responsive"><!--class="table-responsive" begin --->
                <table class="table table-striped table-bordered table-hover"><!--class="table table-striped table-bordered table-hover" begin --->
                    <thead><!--thead begin --->
                        <tr><!-- tr begin -->
                                <th> NO: </th>
                                <th>Users Name: </th>
                                <th> Users Image: </th>
                                <th> Users E-mail: </th>
                                <th>Users Country: </th>
                                <th>Users job: </th>
                                <th>Users Contacts: </th>
                                <th>Edit</th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                    </thead><!--thead begin --->
                    
                    <tbody>
                        
                        <?php
                            $i=0;
                            $get_users = "select * from admins";
                            $run_users = mysqli_query($con, $get_users);
                            while($row_users=mysqli_fetch_array($run_users)){
    # select the products clunm name  ########################################
                                $Users_id = $row_users['admin_id'];
                                
                                $Users_name =$row_users['admin_name'];
                                
                                 $Users_image = $row_users['admin_image'];
                                
                                $Users_email = $row_users['admin_email'];
                                
                                $Users_country = $row_users['admin_country'];
                                
                                $Users_job = $row_users['admin_job'];
                                
                                $Users_contact = $row_users['admin_contact'];
                                
                                $i++;
                # select the products clunm name ===================#
                        
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $Users_name; ?></td>
                            <td>
                            <img src="../admin_area/admin_images/<?php echo $Users_image; ?>" width="60" height="60"></td>
                            <td><?php echo $Users_email;?></td>
                            <td><?php echo $Users_country;?></td>
                            <td> <?php echo $Users_job;?></td>
                            <td> <?php echo $Users_contact;?></td>
    <!--  ====================================================================== -->
     <!-- pending_orders table se data le raha hai jo products order ho chuka hai -->
                                <td>  <a href="index.php?user_profile=<?php echo $Users_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                                     
                                     </td>
     <!--  ====================================================================== -->
                           
      <!--  ================== products ko delete karne ka option =============== -->                      
                            <td>  <a href="index.php?delete_user=<?php echo $Users_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                     </td>
<!-- In this line we can get the deleting part so that admin acn delet the product according ther requirment <a href="index.php?delete_product=<?php echo $pro_id; ?>">   -->        
                           
<!-- ====================     products editing  karne ka option  -->   
                            
   
<!--  ===================================products ko editing karne ka end ============ -->      
                        </tr>
                        <?php } ?>
                    </tbody>
                    
                </table><!--class="table table-striped table-bordered table-hover" end --->
            </div><!--class="table-responsive" end --->
        </div><!--class="panel-body" end --->
        
    </div><!--class="panel panel-default" end--->
 </div><!--class="col-lg-12 breadcrumb" end --->

</div><!--class="row" 2end --->

<?php }?>