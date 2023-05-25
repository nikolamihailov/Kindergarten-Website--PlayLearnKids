<?php
	get_header();
?>
 
 <!-- Carousel Start -->
   <style>
    .course-item .wp-post-image{
         max-width: 100%;
         height: auto;
    }
    .testimonial-item .wp-post-image{
         margin-bottom: 1rem;
         margin-right: auto;
    margin-left: auto;
        border: 1px solid #dee2e6;
        border-radius: 50%;
         max-width: 120px;
         height: 120px;
    }

    .hero { 
    background: url(<?php bloginfo('template_directory'); ?>/img/indeximage.jpg) no-repeat center / cover; 
    height: 70vh;
    width: 100%;
    display: table;
    position: relative;
}

.overlay:before {
  content: '';
  background-color: rgba(255,255,255,0.25);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  
}


.hero-text {
    width: 100%;
    height:100%;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.hero-text h1 {
    margin-top:40px;
    position: relative;
}

.hero-text p {
    position: relative;
    margin: 45px 0 30px;
    font-size: 23px;
    color: black;
}

.hero-text .btn {
        margin-top:20px;
    border-radius: 20px;
    position: relative;
    background-color: #06BBCC;
    color: white;
    font-weight:bold;
    font-size:23px;
}
.hero-text .btn a:visited{
    color: black;
}



.hero-text .btn:hover {
    background-color: #26272d;
    color: #fff;
}

.hero .breadcrumb {
    padding-top: 60px;
    margin-bottom: 0;
}

.hero .breadcrumb:before {
    content: '';
    display: block;
    position: absolute;
    left: 50%;
    bottom: 45px;
    height: 12px;
    width: 80px;
    border-top: 5px solid #fff;
    border-bottom: 3px solid #fff;
    transform: translateX(-50%);
    -moz-transform: translateX(-50%);
    -webkit-transform: translateX(-50%);
    -o-transform: translateX(-50%);
    -ms-transform: translateX(-50%);
}


</style>
<div id="hero" class="hero overlay">
            <div class="hero-text">
                <h1 style="font-weight: bold">PlayLearnKids</h1>
                <p style="font-weight: bold">Най-добрата детска градина за вашето дете!</p>
                <a href="<?php bloginfo('template_directory'); ?>/contact" class="btn btn-border" style="font-weight: bold;">Свържете се с нас</a>
            </div><!-- /.hero-text -->
    </div><!-- /.hero -->
 <!-- Service Start -->
    <div class="container-xxl py-5">
        <div class="container">
            
            <div class="row g-4">
        <?php query_posts('cat=3'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                              <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?>
                            <h5 class="mb-3"><?php the_title(); ?></h5>
                            <p><?php echo the_content(); ?></p>
                        </div>
                    </div>
                </div>
<?php 
						endwhile;
						endif;
					?>
                    <!--
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-globe text-primary mb-4"></i>
                            <h5 class="mb-3">Online Classes</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-home text-primary mb-4"></i>
                            <h5 class="mb-3">Home Projects</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item text-center pt-3">
                        <div class="p-4">
                            <i class="fa fa-3x fa-book-open text-primary mb-4"></i>
                            <h5 class="mb-3">Book Library</h5>
                            <p>Diam elitr kasd sed at elitr sed ipsum justo dolor sed clita amet diam</p>
                        </div>
                    </div>
                </div>
                    -->
            </div>
        </div>
    </div>
    <!-- Service End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                 <?php query_posts('cat=34'); ?>
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s" style="min-height: 400px;">
                    <div class="position-relative h-100">
                        <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?>
                        <!--<img class="img-fluid position-absolute w-100 h-100" src="img/about.jpg" alt="" style="object-fit: cover;">-->
                    </div>
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.3s">
                    <h6 class="section-title bg-white text-start text-primary pe-3"><?php the_title(); ?></h6>
                    <h1 class="mb-4">PlayLearnKids</h1>
                    <p class="mb-4"><?php echo the_content(); ?></p>
                  <!--  <p class="mb-4">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit clita duo justo magna dolore erat amet</p>
                    <div class="row gy-2 gx-4 mb-4">
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Skilled Instructors</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>Online Classes</p>
                        </div>
                        <div class="col-sm-6">
                            <p class="mb-0"><i class="fa fa-arrow-right text-primary me-2"></i>International Certificate</p>
                        </div>
                    </div>-->
                    <a class="btn btn-primary py-3 px-5 mt-2" href="<?php bloginfo('template_directory'); ?>/about">Прочети повече</a>
                </div>
                <?php 
						endwhile;
						endif;
					?>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Categories Start -->
<!--
    <div class="container-xxl py-5 category">
        <div class="container">
            <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
                <h6 class="section-title bg-white text-center text-primary px-3">Categories</h6>
                <h1 class="mb-5">Courses Categories</h1>
            </div>
            <div class="row g-3">
                <div class="col-lg-7 col-md-6">
                    <div class="row g-3">
                        <div class="col-lg-12 col-md-12 wow zoomIn" data-wow-delay="0.1s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/cat-1.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Web Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.3s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/cat-2.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Graphic Design</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                        <div class="col-lg-6 col-md-12 wow zoomIn" data-wow-delay="0.5s">
                            <a class="position-relative d-block overflow-hidden" href="">
                                <img class="img-fluid" src="<?php bloginfo('template_directory'); ?>/img/cat-3.jpg" alt="">
                                <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin: 1px;">
                                    <h5 class="m-0">Video Editing</h5>
                                    <small class="text-primary">49 Courses</small>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-md-6 wow zoomIn" data-wow-delay="0.7s" style="min-height: 350px;">
                    <a class="position-relative d-block h-100 overflow-hidden" href="">
                        <img class="img-fluid position-absolute w-100 h-100" src="<?php bloginfo('template_directory'); ?>/img/cat-4.jpg" alt="" style="object-fit: cover;">
                        <div class="bg-white text-center position-absolute bottom-0 end-0 py-2 px-3" style="margin:  1px;">
                            <h5 class="m-0">Online Marketing</h5>
                            <small class="text-primary">49 Courses</small>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>-->
    <!-- Categories Start -->


    


   


 <!-- Testimonial Start -->
    <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="text-center">
                <h6 class="section-title bg-white text-center text-primary px-3">Отзиви</h6>
                <h1 class="mb-5">Родителите на нашите деца казват:</h1>
            </div>
            <div class="owl-carousel testimonial-carousel position-relative">
                <?php query_posts('cat=4'); ?>
                <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="testimonial-item text-center">
                         <?php 
         						 if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
         						   the_post_thumbnail();
         						 } 
      							  ?>

                    <h5 class="mb-0"><?php the_title(); ?></h5>
                    <p><?php echo get_secondary_title(); ?></p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0"><?php echo the_content(); ?></p>
                    </div>
                </div>
                    <?php 
						endwhile;
						endif;
					?>
                
                <!--
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-2.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-3.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                <div class="testimonial-item text-center">
                    <img class="border rounded-circle p-2 mx-auto mb-3" src="img/testimonial-4.jpg"
                        style="width: 80px; height: 80px;">
                    <h5 class="mb-0">Client Name</h5>
                    <p>Profession</p>
                    <div class="testimonial-text bg-light text-center p-4">
                        <p class="mb-0">Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit diam amet diam et
                            eos. Clita erat ipsum et lorem et sit.</p>
                    </div>
                </div>
                    -->
            </div>
                
        </div>
    </div>
    <!-- Testimonial End -->
    <script>
       let href = window.location.href.toString();
        const [before, page] = href.split("/zanimalnq/");
       // console.log(page);
        const as = document.querySelectorAll("#navbarCollapse ul li a");
        as.forEach(a => {
            if(page.length===0){
                if(a.textContent==="Начало"){
a.parentElement.style.backgroundImage = 'url(<?php bloginfo('template_directory'); ?>/img/star.jpg)';
 a.parentElement.style.backgroundSize = '60px 60px';
    a.parentElement.style.backgroundRepeat = 'no-repeat';
                }
            }
        });
       
        
    </script>
<?php 
    get_footer();
?>