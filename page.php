<?php
get_header()
?>
<style>
   .sidebar{
    position: fixed;
    top: 400px;
    right: 30px;
    text-align:center;
    max-width: 300px;
    padding: 30px;
    background-color: #B2EAEE;
    border-radius:30px;
   }
   .sidebar .header{
      margin: 10px 0px 20px 0px;
   }
   .sidebar .widget-title{
    font-size:23px;
    font-weight:bold;
    margin: 10px 0px 20px 0px;
   }
   #calendar_wrap{
    display: flex;
    flex-direction: center;
    justify-content: center;
    align-items: center;
   }
   .sidebar table caption{
    font-size: 17px;
    text-align:center;
    font-weight: bold;
   }
   .sidebar table th, .sidebar table td{
     padding: 7px;
 font-size: 18px;
   }
     .page-header { 
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(<?php bloginfo('template_directory'); ?>/img/banner-head-start.jpg);
      background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

@media (max-width: 800px) {
    .sidebar{
    display: none}
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

                <?php if (!dynamic_sidebar('right-sidebar')) : ?>

                <?php endif; ?>
            
       <div style="display:flex; flex-direction: column; align-items: center;justify-content: center; text-align:center; position: relative: padding:15px">
            <div style="width:80vw;"><?php the_content() ?></div>
              
            </div>
        </div>
         
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
            if(page==="services/"){
                if(a.textContent==="Услуги"){
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