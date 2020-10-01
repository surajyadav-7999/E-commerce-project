<!--view_p_cats.php ye line index.php se line number 113 to 117 -->
<!-- includes folder from include/sidebar.php line 133-->


<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
<div class="row"><!-- class="row"2  begin-->
    <div class="col-lg-12"><!-- class="col-lg-12" begin-->
        <ol class="bg-warning text-white"><!-- class="breadcrumb" begin-->
           <li>
            
            <i class="fa fa-dashboard" style="font-size:30px;color:red"></i>Dashboard / Insert Product Category
     
        </li>
        </ol><!-- class="breadcrumb" end-->
    </div><!-- class="col-lg-12" end-->
</div><!-- class="row" 1 end-->

<div class="row"><!-- class="row" 2 begin-->
    <div class="col-lg-12"><!-- class="col-lg-12" begin-->
      
       <div class ="panel panel-default"><!-- class ="panel panel-default" begin-->
           <div class="panel-heading"><!--class="panel-heading" begin-->
               <h3 class="panel-title">
                   <i class="fa fa-money fa-fw"></i>Insert Product Category
               </h3>             
           </div><!--class="panel-heading"  end-->
      
     <!-- =========================Product Category Title-=====================================-->     
        <div class="panel-body"><!-- class="panel-body" begin-->
            <form action="" class="form-horizontal"  method="post"><!-- class=from-horizontal" begin-->
                <div class="form-group"><!-- class="form-group" begin-->
                    <label class="control-label col-md-3"><!-- class="control-lable col-md-3" begin-->
                        Product Category Title
                        </label><!-- class="control-lable col-md-3" end-->
                        <div class="col-md-6"><!-- class="col-md-6"begin-->
                            <input type="text" name="p_cat_title" class="form-control">
                        </div><!-- class="col-md-6" end-->       
                </div><!-- class="form-group" end-->
       <!-- =========================Product Category Title-=====================================-->     
              
   <!-- =========================Product Category Description -=====================================-->              
                 <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                            Product Category Description 
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <textarea type='text' name="p_cat_desc" id="" cols="30" rows="10" class="form-control"></textarea>
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
 <!-- =========================Product Category Description -=====================================-->                
        <!-- =========================Product Category Description -=====================================-->        
                 <div class="form-group"><!-- form-group begin -->
                    
                        <label for="" class="control-label col-md-3"><!-- control-label col-md-3 begin --> 
                        
                             
                        
                        </label><!-- control-label col-md-3 finish --> 
                        
                        <div class="col-md-6"><!-- col-md-6 begin -->
                        
                            <input value="Submit" name="submit" type="submit" class="form-control btn btn-warning">
                        
                        </div><!-- col-md-6 finish -->
                    
                    </div><!-- form-group finish -->
   <!-- =========================Product Category Description -=====================================-->                 
             </form><!-- form-horizontal finish -->
            </div><!-- panel-body finish -->
    </div> <!-- class ="panel panel-default" end--> 
    </div><!-- class="col-lg-12" end-->
</div><!-- class="row" 2 end-->


<?php
          if(isset($_POST['submit'])){
              
              $p_cat_title = $_POST['p_cat_title'];
              
              $p_cat_desc = $_POST['p_cat_desc'];
              
              $insert_p_cat ="insert into product_categories (p_cat_title,p_cat_desc) values('$p_cat_title ','$p_cat_desc')";
              
              $run_p_cat = mysqli_query ($con, $insert_p_cat);
              
              if($run_p_cat){
                  
                  echo "<script> alert('your New Product Has Been Inserted')</script>";
                  
                  echo "<script>window.open('index.php?view_p_cats','_self')</script>";
              }
          }



?>

<?php } ?>