<?php 
/**
single page template

**/

get_header()
?>

<main id="main">

    <!-- ======= About Us Section ======= -->
    <section class="breadcrumbs">
      <div class="container">
<?php

if(have_posts()): while(have_posts()):the_post() ?>
        <div class="d-flex justify-content-between align-items-center">
          <h2><?php the_title() ?></h2>
          
        </div>

      </div>
	  <?php endwhile;?>
<?php endif;?>
    </section><!-- End About Us Section -->
	    <!-- ======= About Section ======= -->
    <section class="about" data-aos="fade-up">
	<?php  
if( !is_page_template('elementor_header_footer')) { ?>
    <div class="container">
<?php 
} ?>
        <div class="row">
          <div class="col-lg-12 pt-4 pt-lg-0">
            <?php the_content()?>
          </div>
        </div>

      </div>
    </section><!-- End About Section -->
	
	
	
	
</main>

<?php get_footer()?>