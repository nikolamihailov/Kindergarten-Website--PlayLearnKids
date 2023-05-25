<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PlayLearnKids</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="<?php bloginfo('template_directory'); ?>/img/favicon.ico" rel="icon">
    <link rel="shortcut icon" href="<?php bloginfo('template_directory'); ?>/img/logo.png" type="image/x-icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/lib/animate/animate.min.css" rel="stylesheet">
    <link href="<?php bloginfo('template_directory'); ?>/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="<?php bloginfo('template_directory'); ?>/css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
   
    <!-- Spinner End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow sticky-top p-0">
        <a href="<?php bloginfo('template_directory'); ?>/../../../index.php" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <h2 class="m-0 text-primary"><i class="fa fa-book me-3"></i>PlayLearnKids</h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>

        <?php 
				wp_nav_menu(array(
					'theme_location'  => 'top-menu',
					'menu'            => 'navigation',
					'container'       => 'div',
					'container_id'    => 'navbarCollapse',
					'container_class'    => 'collapse navbar-collapse',
					'menu_class'      => 'navbar-nav ms-auto p-4 p-lg-0',
					'menu_id'         => 'idm',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => ''
				));
			?>
<!-- old menu
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">
                <a href="index.html" class="nav-item nav-link active">Home</a>
                <a href="about.html" class="nav-item nav-link">About</a>
                <a href="courses.html" class="nav-item nav-link">Courses</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Pages</a>
                    <div class="dropdown-menu fade-down m-0">
                        <a href="team.html" class="dropdown-item">Our Team</a>
                        <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        <a href="404.html" class="dropdown-item">404 Page</a>
                    </div>
                </div>
                <a href="contact.html" class="nav-item nav-link">Contact</a>
            </div>
            <a href="" class="btn btn-primary py-4 px-lg-5 d-none d-lg-block">Join Now<i class="fa fa-arrow-right ms-3"></i></a>
        </div>
-->

    </nav>
    <style>
        #navbarCollapse ul{
            margin-right:30px;
        }
         #navbarCollapse ul li{
            display: flex;
            justify-content: center;
            align-items:center;
            height:55px;
            position: relative;
            margin:15px 20px;
            font-size: 16.5px;
            font-weight:bold;
             z-index: 5;
        }
          #navbarCollapse ul li a{
         z-index: 1;
        }
        
#navbarCollapse li::after {
  content: "\2605"; /* Unicode value for a star character */
  position: absolute;
  top: -17px;
  left: 0;
  font-size: 4em; /* Adjust the font-size value as desired */
  color: gold; /* Choose the desired color for the star */
  opacity: 0; /* Hide the star by default */
  z-index: -5;
  /* Add other styling for the pseudo-element */
}

#navbarCollapse li:hover::after {
  opacity: 1; /* Show the star when hovering */
}
        .p-4 .wp-post-image{
            height: 30px;
            width:30px;
        }
        .owl-carousel-item .wp-post-image{
            height: 80vh;
            width:100vw;
        }
    </style>
   
    <!-- Navbar End -->


    

