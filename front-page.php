<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Phase
 * @since Phase 1.0.0
 */

get_header();?>
	<div id="primary" class="content-area entry-content full-height">
		<div id="content" class="site-content" role="main">
			
			<!-- slider content-->

	<div class="wrapper">
		<a href="https://nosarecords.wpcomstaging.com/releases/"><h3 style="text-align:center;">New Releases</h3></a>
      <div class="carousel owl-carousel">
      <?php $args = array(
	'post_type' => 'release',
    'posts_per_page' => 4,
);
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post();?>
    <a href="<?php the_permalink(); ?>"><div class="card card-1"><img height="150px" width="150px" src=" <?php the_post_thumbnail( 'thumbnail' );?> </div></a>
        <?php
      } 
	  }  ?> 
      </div>
</div>
<?php wp_reset_postdata(); ?>


<script>
      $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0:{
            items:1,
            nav: false
          },
          600:{
            items:2,
            nav: false
          },
          1000:{
            items:3,
            nav: false
          }
        }
      });
    </script>


		<div class="my-grid" style="width: 100%;"><a href="https://nosarecords.wpcomstaging.com/news/"><h3 style="text-align:center;">News</h3></a></div>
	<div class="outer-grid"><div class="grid-container">
  <?php $args = array(
    'posts_per_page' => 4, // we need only the latest post, so get that post only
    'cat' => 'ID OF THE CATEGORY', // Use the category id, can also replace with category_name which uses category slug
    //'category_name' => 'SLUG OF FOO CATEGORY,
);
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post();        
        //Your template tags and markup like:
        ?>
      <div class="card">
          <div class="bg-img"><img  alt="Norway" style="width:100%" src="<?php the_post_thumbnail( 'thumbnail' );?></div>
          <div class="content">
            <h4><?php the_title( ); ?></h4>
            <p><?php the_excerpt(); ?> </p>
		</div>
      </div>
      <?php
      } 
	  }  ?>
      
      
    </div>
  
	<div class="wrapper">
    <a href="https://nosarecords.wpcomstaging.com/artists/"><h3 style="text-align:center;">Trending Artists</h3></a>
      <div class="carousel owl-carousel hover-class">
      <?php $args = array(
	'post_type' => 'artist',
    'posts_per_page' => 10,
);
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post();?>
    <a href="<?php the_permalink(); ?>"><div class="card card-1"><img src=" <?php the_post_thumbnail( 'thumbnail' );?> </div></a>
        <?php
      } 
	  }  ?> 
      </div>
</div>
<?php wp_reset_postdata(); ?>
		<script>
      $(".carousel").owlCarousel({
        margin: 20,
        loop: true,
        autoplay: true,
        autoplayTimeout: 2000,
        autoplayHoverPause: true,
        responsive: {
          0:{
            items:1,
            nav: false
          },
          600:{
            items:2,
            nav: false
          },
          1000:{
            items:3,
            nav: false
          }
        }
      });
    </script>
		<div class="my-grid" style="width: 100%;"><a href="https://nosarecords.wpcomstaging.com/videos/"><h3 style="text-align:center;">Videos</h3></a></div>
	<div class="grid-container">
  <?php
$args = array(
    'post_type'      => 'video',
    'posts_per_page' => 4,
	'taxonomy' => $term->name,
	'number' => $term->term_id,
);
		
$q = new WP_Query( $args);

if ( $q->have_posts() ) {
    while ( $q->have_posts() ) {
    $q->the_post();        
        //Your template tags and markup like:
        ?>
		
      <div class="card">
          <div class="bg-img"><img  alt="Norway" style="width:100%" src="<?php the_post_thumbnail( 'thumbnail' );?></div>
          <div class="content">
			  <a href="<?php the_permalink(); ?>"><h4 style="color: green;"><?php the_title( ); ?></h4></a>
			<p>
			<?php the_excerpt(); ?>
			  </p>
             </div>
      </div>
      <?php
      } 
	  }  ?>
      
      
    </div>
    </div>
<?php wp_reset_postdata(); ?>
<!--slider content end-->
		
	</div><!-- #primary .content-area -->
	<?php get_footer( ); ?>