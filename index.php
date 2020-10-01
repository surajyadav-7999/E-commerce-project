<?php 

    session_start();
    include("includes/db.php");
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{
        
        $admin_session = $_SESSION['admin_email'];
        
        $get_admin = "select * from admins where admin_email='$admin_session'";
        
        $run_admin = mysqli_query($con,$get_admin);
        
        $row_admin = mysqli_fetch_array($run_admin);
        
        $admin_id = $row_admin['admin_id'];
        
        $admin_name = $row_admin['admin_name'];
        
        $admin_email = $row_admin['admin_email'];
        
        $admin_image = $row_admin['admin_image'];
        
        $admin_country = $row_admin['admin_country'];
        
        $admin_about = $row_admin['admin_about'];
        
        $admin_contact = $row_admin['admin_contact'];
        
        $admin_job = $row_admin['admin_job'];
        
        $get_products = "select * from products";
        
        $run_products = mysqli_query($con,$get_products);
        
        $count_products = mysqli_num_rows($run_products);
        
        $get_customers = "select * from customers";
        
        $run_customers = mysqli_query($con,$get_customers);
        
        $count_customers = mysqli_num_rows($run_customers);
        
        $get_p_categories = "select * from product_categories";
        
        $run_p_categories = mysqli_query($con,$get_p_categories);
        
        $count_p_categories = mysqli_num_rows($run_p_categories);
        
        $get_pending_orders = "select * from pending_orders";
        
        $run_pending_orders = mysqli_query($con,$get_pending_orders);
        
        $count_pending_orders = mysqli_num_rows($run_pending_orders);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>OM INFOTECH Admin Area</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/style.css">
    
</head>


<?php include("includes/header.php"); ?>
<body>

    <div id="wrapper"><!-- #wrapper begin -->
<!--  webmasters use a “wrapper” to set the appropriate width and act as a full screen would -->        
       <?php include("includes/sidebar.php"); ?>
       
        <div id="page-wrapper"><!-- #page-wrapper begin -->
            <div class="container-fluid"><!-- container-fluid begin -->
                
                <?php
                
                    if(isset($_GET['dashboard'])){
                        
                        include("dashboard.php");
                        
                }   if(isset($_GET['insert_product'])){
                        //insert_product this come from include/sidebar.php line 210
                        include("insert_product.php");
                        
                }
                    if(isset($_GET['view_products'])){
                        //insert_product this come from include/sidebar.php line 210
                        include("view_products.php");
                        
                    }
                    if(isset($_GET['delete_product'])){
                        //insert_product this come from include/sidebar.php line 210
                        include("delete_product.php");
                        
                    }
                    if(isset($_GET['edit_product'])){
                        //insert_product this come from include/sidebar.php line 210
                        include("edit_product.php");
                        
                    }if(isset($_GET['insert_p_cat'])){
                        //includes folder from include/sidebar.php line 136 
                        include("insert_p_cat.php");
                        
                    }if(isset($_GET['view_p_cats'])){ 
                         //includes folder from include/sidebar.php line 133
                        include("view_p_cats.php");
                       
                    }if(isset($_GET['delete_p_cat'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("delete_p_cat.php");
                       
                    }if(isset($_GET['edit_p_cat'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("edit_p_cat.php");
                       
                    }if(isset($_GET['insert_cat'])){ 
                         //delete_p_cat ye variable include/sidebar.php time created 
                        include("insert_cat.php");
                       
                    }if(isset($_GET['view_cats'])){ 
                         //delete_p_cat ye variable include/sidebar.php first time created 
                        include("view_cats.php");
                    }if(isset($_GET['edit_cat'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("edit_cat.php");
                    }if(isset($_GET['delete_cat'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("delete_cat.php");
                    }if(isset($_GET['insert_slide'])){ 
                         //delete_p_cat ye variable slider.php line number 175 first time created 
                        include("insert_slide.php");
                    }if(isset($_GET['edit_slide'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("edit_slide.php");
                    }if(isset($_GET['delete_slide'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("delete_slide.php");
                    }if(isset($_GET['view_slides'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("view_slides.php");
                    }if(isset($_GET['view_customers'])){ 
                         //delete_p_cat ye variable slider.php line number 183 first time created 
                        include("view_customers.php");
                    }if(isset($_GET['delete_customer'])){ 
                         //delete_p_cat ye variable view_p_cats.php line number 77 first time created 
                        include("delete_customer.php");
                    }if(isset($_GET['view_orders'])){ 
                         //delete_p_cat ye variable slider.php line number 182first time created 
                        include("view_orders.php");
                    }if(isset($_GET['Bill'])){ 
                         //delete_p_cat ye variable slider.php line number 182first time created 
                        include("Bill.php");
                    }if(isset($_GET['delete_order'])){ 
                         //delete_p_cat ye variable slider.php line number188 first time created 
                        include("delete_order.php");
                    }if(isset($_GET['view_payments'])){ 
                         //delete_p_cat ye variable slider.php line number 194 first time created 
                        include("view_payments.php");
                    }if(isset($_GET['delete_payment'])){ 
                         //delete_p_cat ye variable view_payement.php line number 99 first time created 
                        include("delete_payment.php");
                    }if(isset($_GET['view_users'])){ 
                         //delete_p_cat ye variable slider.phpline number 212 first time created 
                        include("view_users.php");
                    }if(isset($_GET['delete_user'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("delete_user.php");
                    }if(isset($_GET['insert_user'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("insert_user.php");
                    }if(isset($_GET['delete_user'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("delete_user.php");
                    }if(isset($_GET['user_profile'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("user_profile.php");
                    }if(isset($_GET['edit_css'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("edit_css.php");
                    }if(isset($_GET['bill'])){ 
                         //delete_p_cat ye variable view_user.php line number 96 first time created 
                        include("bill.php");
                    }if(isset($_GET['insert_terms'])){
                        
                        include("insert_terms.php");
                        
                }   if(isset($_GET['view_terms'])){
                        
                        include("view_terms.php");
                        
                } if(isset($_GET['delete_term'])){
                        
                        include("delete_term.php");
                        
                }   if(isset($_GET['edit_term'])){
                        
                        include("edit_term.php");
                        
                }
        
                
                ?>
                
            </div><!-- container-fluid finish -->
        </div><!-- #page-wrapper finish -->
    </div><!-- wrapper finish -->

<script src="js/jquery-331.min.js"></script>     
<script src="js/bootstrap-337.min.js"></script>           
</body>
</html>
<?php } ?>