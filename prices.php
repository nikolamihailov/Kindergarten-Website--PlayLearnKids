 <?php
  get_header();

   /**
* Template Name: prices
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
/*
$price_three=0;
$price_six=0;
$price_twelve=0;
if(get_field("price_for_three_months")){
    $price_three= the_field("price_for_three_months");
    echo $price_three;
}
if(get_field("price_for_six_months")){
    $price_six= the_field("price_for_six_months");
    echo $price_six;
}
if(get_field("price_for_twelve_months")){
    $price_twelve= the_field("price_for_twelve_months");
    echo $price_twelve;
}*/
?>
<style>
       .page-header { 
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(<?php bloginfo('template_directory'); ?>/img/money-banner.jpg);
      background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}
</style>
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
?>

 <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown"><?php the_title(); ?></h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Начало</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page"><?php the_title(); ?></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
       <div style="display:flex; flex-direction: column; align-items: center;justify-content: center; text-align:center; position: relative">
            <div style="width:80vw;"><?php the_content() ?></div>
        </div>

        
<!-- Courses Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Цени</h6>
                <h1 class="mb-5">Най-популярни ценови пакети:</h1>
            </div>
            <div class="row g-4 justify-content-center">

                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">

                        <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/three.jpg" alt="">
                      
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0"><?php the_field('price_for_three_months'); ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(45)</small>
                            </div>
                            <h5 class="mb-4">3-месечен период</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>6 часа дневно</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 деца</small>
                        </div>
                    </div>
                </div>
           


                 <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                         <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/sixM.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0"><?php the_field('price_for_six_months'); ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">6-месечен период</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>6 часа дневно</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 деца</small>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                        <div class="position-relative overflow-hidden">
                         <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/twelveM.jpg" alt="">
                        </div>
                        <div class="text-center p-4 pb-0">
                            <h3 class="mb-0"><?php the_field('price_for_twelve_months'); ?></h3>
                            <div class="mb-3">
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small class="fa fa-star text-primary"></small>
                                <small>(123)</small>
                            </div>
                            <h5 class="mb-4">12-месечен период</h5>
                        </div>
                        <div class="d-flex border-top">
                            <small class="flex-fill text-center border-end py-2"><i class="fa fa-clock text-primary me-2"></i>6 часа дневно</small>
                            <small class="flex-fill text-center py-2"><i class="fa fa-user text-primary me-2"></i>30 деца</small>
                        </div>
                    </div>
                </div>  
                                  
            </div>
        </div>
    </div>
    <!-- Courses End -->
<?php
    }
}
?>
<script>
       let href = window.location.href.toString();
        const [before, page] = href.split("/zanimalnq/");
       console.log(page);
        const as = document.querySelectorAll("#navbarCollapse ul li a");
        as.forEach(a => {
            if(page==="prices/"){
                if(a.textContent==="Пакети"){
a.parentElement.style.backgroundImage = 'url(<?php bloginfo('template_directory'); ?>/img/star.jpg)';
 a.parentElement.style.backgroundSize = '60px 60px';
    a.parentElement.style.backgroundRepeat = 'no-repeat';
                }
            }
        });
       
        
    </script>
<?php
get_footer()
?>