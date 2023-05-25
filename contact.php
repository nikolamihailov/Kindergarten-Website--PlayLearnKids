<?php
  get_header();

   /**
* Template Name: contact
*
* @package WordPress
* @subpackage Twenty_Fourteen
* @since Twenty Fourteen 1.0
*/
?>
<style>
    body{
          overflow-x: hidden;
    }
    .page-header { 
    background: linear-gradient(rgba(24, 29, 56, .7), rgba(24, 29, 56, .7)), url(<?php bloginfo('template_directory'); ?>/img/contact.jpg);
      background-position: center center;
    background-repeat: no-repeat;
    background-size: cover;
}

.overlay:before {
  content: '';
  background-color: rgba(255,255,255,0.5);
  height: 100%;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  z-index: 0;
  
}

.hero-content {
    display: table-cell;
    vertical-align: middle;
    padding-top: 75px;
    color: black;
}

.hero-text {
    max-width: 890px;
    width: 100%;
    margin: 0 auto;
    padding: 0 15px;
    text-align: center;
}

.hero-text h1 {
    position: relative;
    margin: 0;
}

.hero-text p {
    position: relative;
    margin: 45px 0 30px;
    font-size: 23px;
    color: black;
}

.hero-text .btn {
    position: relative;
    background-color: transparent;
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
.wpcf7{
   margin-right:20px;
     display: flex;
    align-items: center;
    justify-content: center;
}
form{
    width:440px;
     padding:20px 30px;
 border:3px solid #00FFFF;
    border-radius:15px;
}
.container-contact{
     text-align:center;
    display: flex;
    align-items: center;
    justify-content: center;
    margin-bottom:25px;
}

@media (max-width: 800px) {
    .container-contact{
    display: flex;
    flex-direction:column;
    align-items: center;
    justify-content: center;
}
}

</style>
 <div class="container-fluid bg-primary py-5 mb-5 page-header">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-10 text-center">
                    <h1 class="display-3 text-white animated slideInDown">Контакти</h1>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center">
                            <li class="breadcrumb-item"><a class="text-white" href="#">Начало</a></li>
                            <li class="breadcrumb-item text-white active" aria-current="page">Контакти</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

<section class="site-section subpage-site-section section-contact-us">

    <div class="container-contact">
            <div class="col-sm-7">
                <h2>Изпратете съобщение:</h2>
                <?php echo do_shortcode('[contact-form-7 id="24" title="Форма за контакти 1"]') ?>
            </div>
            <div class="col-sm-5">
                <div class="contact-info">
                    <h2>Информация за контакта:</h2>
                    <div class="row">
                        <div class="col-sm-12">
                            <h3>Адрес</h3>
                            <ul class="list-unstyled">
                                <li>Пловдив, България</li>
                                <li>Център Пловидв, ул."Райко Даскалов" 72</li>
                            </ul>
                            <h3>Имейл</h3>
                            <a href="ivanP@gmail.com" target="_blank">ivanP@gmail.com</a>
                            <h3>Телефон</h3>
                            <a href="tel:2083339296" target="_blank">(208) 333 9296</a>
                            <h3>Факс</h3>
                            <p>(208) 333 9296</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    
</section>


<section id="map" class="section-map">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2957.8962571662655!2d24.743705615449763!3d42.15250677920141!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14acd19624bc1291%3A0xc226628f55fbbe40!2z0J_RgNC10LLQvtC00Lgg0J_Qu9C-0LLQtNC40LI!5e0!3m2!1sbg!2sbg!4v1645972596987!5m2!1sbg!2sbg" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</section><!-- /.section-map -->

</main><!-- /#main -->
<script>
       let href = window.location.href.toString();
        const [before, page] = href.split("/zanimalnq/");
       console.log(page);
        const as = document.querySelectorAll("#navbarCollapse ul li a");
        as.forEach(a => {
            if(page==="contacts/"){
                if(a.textContent==="Контакти"){
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