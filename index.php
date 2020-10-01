<?php
$active='Home';
include("includes/header.php");
?> 
  <!--==========================================slider container begin============--> 
   <div class="container-fluid bg-warning" sizes="1400x490" id="slider"><!-- container Begin -->
       
<div class="col-xl-12" sizes="1400x490"><!-- col-md-12 Begin -->
    <div class="carousel slide" id="myCarousel" sizes="1400x490" data-ride="carousel"><!-- carousel slide Begin -->
    <!--The Carousel plugin is a component for cycling through elements, like a carousel (slideshow).-->   
                  <ol class="carousel-indicators" sizes="1400x490"><!-- carousel-indicators Begin -->
<!--which indicates how many slides there are in the carousel, and which slide the user is currently viewing -->                   
                   <li class="active" sizes="1400x490"  data-target="#myCarousel"  data-slide-to="0"></li>
                   <li data-target="#myCarousel" sizes="1400x490" data-slide-to="1"></li>
                   <li data-target="#myCarousel" sizes="1400x490" data-slide-to="2"></li>
                   <li data-target="#myCarousel" sizes="1400x490" data-slide-to="3"></li>
                   
               </ol><!-- carousel-indicators Finish -->
  <!--==========================================image of slider 1 image============-->            
               <div class="carousel-inner"><!-- carousel-inner Begin -->
                   
                    <?php 
                   
                   $get_slides = "select * from slider LIMIT 0,1";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides = mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name']; #slide_name is column of slider table 
                       $slide_image = $row_slides['slide_image'];#slide_image is column of slider table
                       $slider_url = $row_slides['slider_url'];
                       
                       echo "
                       
                       <div class='item active'>
                            <a href='$slider_url'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </a>
                       
                       </div>
                       
                       ";
                       
                   }
  # ====================================image of slider 2,3,4 image============                  
                   $get_slides = "select * from slider LIMIT 1,3";
                   
                   $run_slides = mysqli_query($con,$get_slides);
                   
                   while($row_slides=mysqli_fetch_array($run_slides)){
                       
                       $slide_name = $row_slides['slide_name'];
                       $slide_image = $row_slides['slide_image'];
                       $slider_url = $row_slides['slider_url'];
                       
                       echo "
                       
                       <div class='item'>
                            <a href='$slider_url'>
                                <img src='admin_area/slides_images/$slide_image'>
                            </a>
                       
                       </div>
                       
                       
                       ";
                       
                   }
                   
                   ?>
<!-- ==========================================image of slider 2,3,4 image end========= -->                  
               </div><!-- carousel-inner Finish -->
               
               <a href="#myCarousel" class="left carousel-control" data-slide="prev"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-left"></span>
                   <span class="sr-only">Previous</span>
                   
               </a><!-- left carousel-control Finish -->
               
               <a href="#myCarousel" class="right carousel-control" data-slide="next"><!-- left carousel-control Begin -->
                   
                   <span class="glyphicon glyphicon-chevron-right"></span>
                   <span class="sr-only">Next</span>
                   
               </a><!-- left carousel-control Finish -->
               
           </div><!-- carousel slide Finish -->
           
       </div><!-- col-md-12 Finish -->
       
   </div><!-- container Finish -->
    <!--==========================================slider container END============-->
    
      
   <!--=============== icons bigin ===============================-->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container bg-warning"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container bg-warning"><!-- container Begin -->
        <!--========================first image===================================================-->
       <div class="row"><!-- row Begin -->
         
             <?php 
           
            getPro();
           
           ?>
           
           
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("includes/footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>