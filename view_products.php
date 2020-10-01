<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<!----------------------------------Dashboard--------------------------------------------->
<div class="row"><!--class="row" 1begin --->
    <div class="col-lg-12"> <!--class="col-lg-12" begin --->
       <ol class="breadcrumb" style="background-color: Cyan;"><!--class="breadcrumb" begin --->
        <li class="active"><!--class="active" begin --->
            <i class="fa fa-dashboard" style="font-size:28px;color:red"></i>Dashboard / view Products
        
        </li><!--class="active" end --->
        </ol><!--class="breadcrumb" end --->
    </div><!--class="col-lg-12 breadcrumb" end --->
</div><!--class="row"1 end --->
<!----------------------------------View Products--------------------------------------------->
<div class="row"><!--class="row"2 begin --->
<div class="col-lg-12"> <!--class="col-lg-12" begin --->
    <div class="panel panel-default" style="background-color: coral;"><!--class="panel panel-default" begin --->
        <div class= "panel-hading"><!--class="palnel-hading" begin --->
            <h3 class ="palnel-title"><!--class="palnel-title" begin --->
                <i class="fa fa-tags" style="font-size:28px;color:red"></i> View Products
           </h3><!--class="palnel-title" end --->
        </div><!--class="palnel-hading" end --->
        
        <div class="panel-body"><!--class="panel-body" begin --->
            <div class="table-responsive"><!--class="table-responsive" begin --->
                <table class="table table-striped table-bordered table-hover"><!--class="table table-striped table-bordered table-hover" begin --->
                    <thead><!--thead begin --->
                        <tr><!-- tr begin -->
                                <th> Product ID: </th>
                                <th> Product Title: </th>
                                <th> Product Image: </th>
                                <th> Product Price: </th>
                                <th> Product Sale: </th>
                                <th> Product Keywords: </th>
                                <th> Product Date: </th>
                                <th> Product Delete: </th>
                                <th> Product Edit: </th>
                            </tr><!-- tr finish -->
                    </thead><!--thead begin --->
                    
                    <tbody>
                        
                        <?php
                            $i=0;
                            $get_pro = "select * from products";
                            $run_pro = mysqli_query($con,$get_pro);
                            while($row_pro=mysqli_fetch_array($run_pro)){
    # select the products clunm name  ########################################
                                $pro_id = $row_pro['product_id'];
                                $pro_title = $row_pro['product_title'];
                                $pro_img1 = $row_pro['product_img1'];
                                $pro_img2 = $row_pro['product_img2'];
                                $pro_img3 = $row_pro['product_img3'];
                                $pro_price = $row_pro['product_price'];
                                $pro_keywords = $row_pro['product_keywords'];
                                $pro_date = $row_pro['date'];
                                $i++;
                # select the products clunm name ===================#
                        
                        ?>
                        <tr>
                            <td><?php echo $i; ?></td>
                            <td><?php echo $pro_title; ?></td>
                            <td><img src="product_images/<?php echo $pro_img1;?>" width="60" height="60"></td>
                            <td>₹ <?php echo $pro_price;?></td>
    <!--  ====================================================================== -->
     <!-- pending_orders table se data le raha hai jo products order ho chuka hai -->
                           
            <td><?php
                    $get_sold = "select * from pending_orders where product_id='$pro_id'";
                                    
                    $run_sold = mysqli_query($con,$get_sold);
                                    
                    $count = mysqli_num_rows($run_sold);
                                    
                    echo $count;
                                
                ?>
            </td>
                                
     <!--  ====================================================================== -->
                            <td><?php echo $pro_keywords;?></td>
                            <td><?php echo $pro_date;?></td>
      <!--  ================== products ko delete karne ka option =============== -->                      
                            <td>  <a href="index.php?delete_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-trash-o"></i> Delete
                                    
                                     </a> 
                                     
                                     </td>
<!-- In this line we can get the deleting part so that admin acn delet the product according ther requirment <a href="index.php?delete_product=<?php echo $pro_id; ?>">   -->        
                           
<!-- ====================     products editing  karne ka option  -->   
                            <td>
                            
                            <a href="index.php?edit_product=<?php echo $pro_id; ?>">
                                     
                                        <i class="fa fa-pencil"></i> Edit
                                    
                                     </a> 
                            
                            </td>
   
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