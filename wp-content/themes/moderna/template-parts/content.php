<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package moderna
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

    <!-- ======= Blog Section ======= -->
    <section class="breadcrumbs">
      <div class="container">

        <div class="d-flex justify-content-between align-items-center">
		<?php if(is_singular()):the_title('<h2 class="entry-title">','</h2>');
		else:
		  the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">','</a></h2>');
          endif;
		  ?>
         
        </div>

      </div>
    </section><!-- End Blog Section -->
	
	<!-- .entry-header -->
<section id="blog" class="blog">
      <div class="container" data-aos="fade-up">

        <div class="row">

          <div class="col-lg-8 entries">

            <article class="entry entry-single">

              <div class="entry-img">
			  <?php if(has_post_thumbnail()): the_post_thumbnail(); 
	           endif;
	           ?>
                <!--<img src="assets/img/blog/blog-1.jpg" alt="" class="img-fluid">-->
              </div>

              <h2 class="entry-title">         
		 
		 <?php the_title('<a href="' . esc_url(get_permalink()) . '" >', '</a>'); ?>

              </h2>

              <div class="entry-meta">
                <ul>
                  <li class="d-flex align-items-center"><i class="bi bi-person"></i> <a href="blog-single.html"><?php the_author_posts_link()?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-clock"></i> <a href="blog-single.html"><?php the_time('F jS, Y'); ?></a></li>
                  <li class="d-flex align-items-center"><i class="bi bi-chat-dots"></i> <a href="blog-single.html">12 Comments</a></li>
                </ul>
              </div>

              <div class="entry-content">
                		<?php
		the_content(
			sprintf(
				wp_kses(
					/* translators: %s: Name of current post. Only visible to screen readers */
					__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'moderna' ),
					array(
						'span' => array(
							'class' => array(),
						),
					)
				),
				wp_kses_post( get_the_title() )
			)
		);

		wp_link_pages(
			array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'moderna' ),
				'after'  => '</div>',
			)
		);
		?>

              </div>

              <div class="entry-footer">
                <i class="bi bi-folder"></i>
                <ul class="cats">
				 <li><?php the_category(',')?></li>
                </ul>

                <i class="bi bi-tags"></i>
                <ul class="tags">
                  <li></li>
                </ul>
              </div>

            </article><!-- End blog entry -->

            <!--<div class="blog-author d-flex align-items-center">
              <img src="assets/img/blog/blog-author.jpg" class="rounded-circle float-left" alt="">
              <div>
                <h4><?php the_author()?></h4>
                <div class="social-links">
                  <a href="https://twitters.com/#"><i class="bi bi-twitter"></i></a>
                  <a href="https://facebook.com/#"><i class="bi bi-facebook"></i></a>
                  <a href="https://instagram.com/#"><i class="biu bi-instagram"></i></a>
                </div>
                <p>
                  Itaque quidem optio quia voluptatibus dolorem dolor. Modi eum sed possimus accusantium. Quas repellat voluptatem officia numquam sint aspernatur voluptas. Esse et accusantium ut unde voluptas.
                </p>
              </div>
            </div><!-- End blog author bio -->

            <div class="blog-comments">

              <!--<h4 class="comments-count">8 Comments</h4>-->

             
<?php
             // If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

             
            

            ?>

            </div><!-- End blog comments -->

          </div><!-- End blog entries list -->

          <div class="col-lg-4">

            <div class="sidebar">

              <?php  get_sidebar()?>

            </div><!-- End sidebar -->

          </div><!-- End blog sidebar -->

        </div>

      </div>
    </section><!-- End Blog Single Section -->
	
	

	<div class="entry-content">

	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //moderna_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
