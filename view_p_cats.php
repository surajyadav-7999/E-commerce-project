<!--view_p_cats.php ye line index.php se line number 109 to 111 -->
<!-- includes folder from include/sidebar.php line 133-->

<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row"><!-- class="row"2  begin-->
    <div class="col-lg-12"><!-- class="col-lg-12" begin-->
        <ol class="breadcrumb"><!-- class="breadcrumb" begin-->
           <li>
            
            <i class="fa fa-dashboard"></i>Dashboard / View Product Categories
     
        </li>
        </ol><!-- class="breadcrumb" end-->
    </div><!-- class="col-lg-12" end-->
</div><!-- class="row" 1 end-->


<div class="row"><!-- class="row" 2 begin-->
    <div class="col-lg-12"><!-- class="col-lg-12" begin-->
      
       <div class ="panel panel-default"><!-- class ="panel panel-default" begin-->
           <div class="panel-heading"><!--class="panel-heading" begin-->
               <h3 class="panel-title">
                   <i class="fa fa-tags fa-fw"></i>View Product Category
               </h3>             
           </div><!--class="panel-heading"  end-->
      
     <!-- =========================Product Category Title-=====================================-->     
        <div class="panel-body"><!-- class="panel-body" begin-->
          <div class="table-responsive"><!-- class="table-responsive" begin-->
              <table class="table table-hover table-striped table-bordered"><!-- class="table table-hover table-striped table-boredered" <!-- thead end-->
                  <thead><!-- thead begin-->
                      <tr>
                          <th>Product Category ID</th>
                          <th>Product Category Title</th>
                          <th>Product Category Desc</th>
                          <th>Edit Product Category </th>
                          <th>Delete Product Category</th>
                      </tr>
                  </thead><!-- thead  begin-->
                    <?php
                        
                        $i=0;
                        $get_p_cats = "select * from product_categories";
                        $run_p_cats = mysqli_query ($con, $get_p_cats);
                        while($row_p_cats= mysqli_fetch_array( $run_p_cats )){
                            $p_cat_id = $row_p_cats['p_cat_id'];
                            
                            $p_cat_title = $row_p_cats['p_cat_title'];
                            
                            $p_cat_desc = $row_p_cats['p_cat_desc'];
                            
                            $i++;
                  
                    ?>
                    <tr><!-- tr begin-->
                        <td><?php echo $i;  ?></td>
                        <td><?php echo $p_cat_title; ?></td>
                        <td width="300"><?php echo $p_cat_desc; ?></td>
                        <td>
                            <a href="index.php?edit_p_cat= <?php echo $p_cat_id; ?>">
                                <i class="fa fa-pencil">Edit (line70,71)
                                    
                                </i>
                                </a>
                                </td>
                        <td>
                           <a href="index.php?delete_p_cat= <?php echo $p_cat_id; ?>">
                                <i class="fa fa-trash">Delete(line78,77)
                                    
                                </i>
                                </a>
                            
                        </td>
                    </tr><!-- tr end-->
                    
                    <?php } ?>
                  
                  <tbody><!-- thead end-->
                      
                      
                  </tbody><!-- thead end-->
              </table><!-- class="table table-hover table-striped table-boredered" finish-->
          </div><!-- class="table-responsive" finish-->
           
           
            </div><!-- panel-body finish -->
    </div> <!-- class ="panel panel-default" end--> 
    </div><!-- class="col-lg-12" end-->
</div><!-- class="row" 2 end-->
<?php }?>