<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */

get_header(); ?>
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex justify-cntent-center align-items-center">
    <div id="heroCarousel" class="container carousel carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

<?php
                      	$args      = array('post_type' => 'slider', 'post_status' => 'publish', 'posts_per_page' => -1);
			            $the_query = new WP_Query($args);
			            if ($the_query->have_posts()) :
			            	$i=0;
			                while ($the_query->have_posts()) :
			                    $the_query->the_post();
			                ?>

      <!-- Slide 1 -->
      <div class="carousel-item <?php if($i==0){echo 'active';}$i++;?>">
        <div class="carousel-container">
          <h2 class="animate__animated animate__fadeInDown"><?php the_title()?></h2>
          <p class="animate__animated animate__fadeInUp"><?php the_content()?></p>
          <!--<a href="" class="btn-get-started animate__animated animate__fadeInUp">Read More</a>-->
        </div>
      </div>

  

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon bx bx-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon bx bx-chevron-right" aria-hidden="true"></span>
      </a>
<?php endwhile?>
<?php endif ?>
    </div>
  </section><!-- End Hero -->

  <main id="main">
    <!-- ======= Services Section ======= -->
    <section class="services">
      <div class="container">
        <div class="section-title">
          <h2>Services</h2>
         </div>
        <div class="row">
		<?php
		$service = array('post_type'=>'service','post_status'=>'publish');
		 $query = new WP_Query($service);
		 //$query = new WP_Query( 'cat=3,1,4,5' );
		$i=0;
		if( $query->have_posts()):while( $query->have_posts()): $query->the_post()?>
		
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href=""><?php the_title()?></a></h4>
              <p class="description"><?php the_excerpt()?></p>
            </div>
          </div>
     <?php  $i++;endwhile ?>
	 <?php endif ?>
       </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Why Us Section ======= -->
    <section class="why-us section-bg" data-aos="fade-up" date-aos-delay="200">
      <div class="container">

        <div class="row">
          <div class="col-lg-6 video-box">
            <img src="<?php bloginfo('template_directory')?>/assets/img/why-us.jpg; ?>" class="img-fluid" alt="">
            <a href="https://www.youtube.com/watch?v=jDDaplaOz7Q" class="venobox play-btn mb-4" data-vbtype="video" data-autoplay="true"></a>
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center p-5">

            <div class="icon-box">
              <div class="icon"><i class="bx bx-fingerprint"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate non provident</p>
            </div>

            <div class="icon-box">
              <div class="icon"><i class="bx bx-gift"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Why Us Section -->

    <!-- ======= Features Section ======= -->
    <section class="features">
      <div class="container">

        <div class="section-title">
          <h2>Features</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>


  
  <?php
$arg = array(
      'post_type' => 'featurepost',
       'posts_per_page'=>4, 'order'=>'DESC',
    );
    $my_query = new WP_Query( $arg );
	 if($my_query->have_posts() ) :
     $i=1;
  while ($my_query->have_posts()) : $my_query->the_post();?>
        <div class="row" data-aos="fade-up" >
		
          <div class="col-md-5 order-12 <?php if($i%2==1){ echo 'order-md-2';} ?>">
		    <?php 
 if(has_post_thumbnail())
 {
	$large_image_url = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');
	echo '<img src="' .$large_image_url[0]. '" title ="' .the_title_attribute('echo=0'). '" width="100%" height="100%">';
 }
 ?>
 
 
    <!--<img src="<?php bloginfo('template_directory')?>/assets/img/features-1.svg; ?>" class="img-fluid" alt="">-->
          </div>
          <div class="col-md-7 pt-4">
            <h3><?php the_title() ?></h3>
            <p class="fst-italic">
              <?php the_content()?>
            </p>
            <!--<ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
            </ul>-->
          </div>
        </div>
         
        <?php $i++ ;endwhile ?>
		<?php endif;?>
		<?php wp_reset_query() ?>
       <!-- <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-2.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Corporis temporibus maiores provident</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5">
            <img src="assets/img/features-3.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5">
            <h3>Sunt consequatur ad ut est nulla consectetur reiciendis animi voluptas</h3>
            <p>Cupiditate placeat cupiditate placeat est ipsam culpa. Delectus quia minima quod. Sunt saepe odit aut quia voluptatem hic voluptas dolor doloremque.</p>
            <ul>
              <li><i class="bi bi-check"></i> Ullamco laboris nisi ut aliquip ex ea commodo consequat.</li>
              <li><i class="bi bi-check"></i> Duis aute irure dolor in reprehenderit in voluptate velit.</li>
              <li><i class="bi bi-check"></i> Facilis ut et voluptatem aperiam. Autem soluta ad fugiat.</li>
            </ul>
          </div>
        </div>

        <div class="row" data-aos="fade-up">
          <div class="col-md-5 order-1 order-md-2">
            <img src="assets/img/features-4.svg" class="img-fluid" alt="">
          </div>
          <div class="col-md-7 pt-5 order-2 order-md-1">
            <h3>Quas et necessitatibus eaque impedit ipsum animi consequatur incidunt in</h3>
            <p class="fst-italic">
              Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
              magna aliqua.
            </p>
            <p>
              Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate
              velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
              culpa qui officia deserunt mollit anim id est laborum
            </p>
          </div>
        </div>-->

      </div>
    </section><!-- End Features Section -->

  </main><!-- End #main -->
  
  <?php get_footer() 
  ?>