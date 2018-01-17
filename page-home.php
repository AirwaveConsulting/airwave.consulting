<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the PAGE-HOME.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<section class="featured_image">

    <h1><?php the_field('featured_image_title'); ?></h1>
    <h2><?php the_field('featured_image_subtitle'); ?></h2>
    
    <img src="<?php the_post_thumbnail_url('large'); ?>">
    
</section>

<!-- CONTENT ONE -->
<section class="content_one">
<div class="inner">
    <?php the_field('content_1'); ?>
    
    <a class="one" href="<?php the_field('content_1_button_1_url'); ?>"><?php the_field('content_1_button_1_text'); ?>&nbsp;&nbsp;&nbsp;&rarr;</a>
    
    <a class="two" href="<?php the_field('content_1_button_2_url_new'); ?>"><?php the_field('content_1_button_2_text'); ?>&nbsp;&nbsp;&nbsp;&rarr;</a>
</div>
</section>

<!-- CONTENT TWO -->
<section class="content_two">
<div class="inner">
    <h1>Our Services</h1>
    <div class="divider"></div>
    <ul class="services">
    <?php // custom loop for the services
    
    $args = array('post_type' => 'services', 'posts_per_page' => -1, 'order' => 'ASC');
    $service_query = new WP_Query($args);
    
    while( $service_query->have_posts() ) : $service_query->the_post(); ?>
    
    <li>
        <div class="wrap">
        <?php the_field('icon'); ?>
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>">LEARN MORE</a>
        </div>
    </li>
    
    <?php endwhile; ?>
    
    </ul>
</div>
</section>

<?php if( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <?php the_content(); ?>

<?php endwhile; else : ?>
	<p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
<?php endif; ?>

<!-- SECTION.CONTENT ends immediately after this -->

<?php get_footer(); ?>