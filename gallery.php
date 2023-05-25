<?php
  get_header();
  /**
* Template Name: gallery
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<style>
    /*
    h3{
        color:white;
    }*/
    .counter{
font-size:25px;
color: black;
font-weight:bold;
    }
    .ngg-imagebrowser-nav{
        display:flex;
        justify-content:center;
        align-items:center;
    }
    .next, .back{
        position:relative;
        margin:5px;
          background: lightblue;
padding: 15px;
    }
    .next a, .back a{
        width:100%;
        height:100%;
        color: white;
      
font-size: 25px;
    }
    
    img{
        border-radius: 40px;
        height:600px;
        width:800px;
        margin:20px;
    }
    @media (max-width: 1200px) {
    img{
        height:400px;
        width:600px;
    
        }
}
    
@media (max-width: 800px) {
    img{
        height:200px;
        width:300px;
    
}
}
</style>
<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
	?>
    <!--
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
    -->
<div style="">
<h1 style="color: black; text-align: center;  margin-top: 50px;"><?php echo the_content(); ?></h1>
<div style="margin: auto; width: 80%;height: 50%; display: flex; justify-content:center;align-items:center; flex-direction:column">
<?php the_content(); ?>
</div>
</div>


<br>
<br>
<br>
<hr>
</div>
<?php }}?>
 <script>
       let href = window.location.href.toString();
        const [before, page] = href.split("/zanimalnq/");
       console.log(page);
        const as = document.querySelectorAll("#navbarCollapse ul li a");
        as.forEach(a => {
            if(page==="gallery/"){
                if(a.textContent==="Галерия"){
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