<!------------------------------------copy from delete_P_product.php-------->
   

<?php 
    
    if(!isset($_SESSION['admin_email'])){
        
        echo "<script>window.open('login.php','_self')</script>";
        
    }else{

?>
 
<?php
          if(isset($_GET['delete_payment'])){
    //['delete_p_cat'] ye variable view_p_cats.php line number 77 first time created than index.php 117
              $delete_payment_id= $_GET['delete_payment'];
              $delete_payment = "delete from payments where payment_id = '$delete_payment_id'";
              
              $run_delete = mysqli_query($con,$delete_payment);
              if( $run_delete ){
                  
                  echo "<script>alert('one of your product has been deleted')</script>";
                  echo  "<script>window.open('index.php?view_payments','_self')</script>";
                  
              }
          }

?>

<?php }?>