<!----------------------------------------------------copy from view_product------------------->
<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<!----------------------------------Dashboard--------------------------------------------->
<div class="row"><!--class="row" 1begin --->
    <div class="col-lg-12"> <!--class="col-lg-12" begin --->
       <ol class="breadcrumb"><!--class="breadcrumb" begin --->
        <li class="active"><!--class="active" begin --->
            <i class="fa fa-dashboard"></i>Dashboard / view Coustomers
        
        </li><!--class="active" end --->
        </ol><!--class="breadcrumb" end --->
    </div><!--class="col-lg-12 breadcrumb" end --->
</div><!--class="row"1 end --->
<!----------------------------------View Products--------------------------------------------->
<div class="row"><!--class="row"2 begin --->
<div class="col-lg-12"> <!--class="col-lg-12" begin --->
    <div class="panel panel-default"><!--class="panel panel-default" begin --->
        <div class= "panel-hading"><!--class="palnel-hading" begin --->
            <h3 class ="palnel-title"><!--class="palnel-title" begin --->
                <i class="fa fa-tags"></i> View Coustomers
           </h3><!--class="palnel-title" end --->
        </div><!--class="palnel-hading" end --->
        
        <div class="panel-body"><!--class="panel-body" begin --->
            <div class="table-responsive"><!--class="table-responsive" begin --->
                <table class="table table-striped table-bordered table-hover"><!--class="table table-striped table-bordered table-hover" begin --->
                    <thead><!--thead begin --->
                        <tr><!-- tr begin -->
                                <th> NO: </th>
                                <th> Name: </th>
                                <th>  Image: </th>
                                <th> E-mail: </th>
                                <th> Country: </th>
                                <th> City: </th>
                                <th> Address: </th>
                                <th> Contacts: </th>
                                <th> Delete: </th>
                            </tr><!-- tr finish -->
                    </thead><!--thead begin --->
                    
                    <tbody>
                        
                        <?php
                            $i=0;
                            $get_c = "select * from customers";
                            $run_c = mysqli_query($con,$get_c);
                            while($row_c=mysqli_fetch_array($run_c)){
    # select the products clunm name  ########################################
                                $c_id = $row_c['customer_id'];
                                
                                $c_name = $row_c['customer_name'];
                                
                                $c_img1 = $row_c['customer_image'];
                                
                                $c_email = $row_c['customer_email'];
                                
                                $c_country = $row_c['customer_country'];
                                
                                $c_city = $row_c['customer_city'];
                                
                                $c_address = $row_c['customer_address'];
                                
                                $c_contect = $row_c['customer_contact'];
                                
                                $i++;
                # select the products clunm name ===================#
                        
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $c_name; ?></td>
                            <td>
                            <img src="../customer/customer_images/<?php echo $c_img1; ?>" width="60" height="60"></td>
                            <td><?php echo $c_email;?></td>
                            <td><?php echo $c_country;?></td>
                            <td> <?php echo $c_city;?></td>
                            <td> <?php echo $c_address;?></td>
                            <td> <?php echo $c_contect;?></td>
    <!--  ====================================================================== -->
     <!-- pending_orders table se data le raha hai jo products order ho chuka hai -->
                                
     <!--  ====================================================================== -->
                           
      <!--  ================== products ko delete karne ka option =============== -->                      
                            <td>  <a href="index.php?delete_customer=<?php echo $c_id; ?>">
                                     
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