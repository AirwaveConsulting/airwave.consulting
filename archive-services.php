<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the ARCHIVE-SERVICES.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<section class="content_header">

    <h1>Our Services</h1>
    <h2>We offer a wide variety of services ranging from complete custom<br> website creation to basic troubleshooting and tech support.</h2>
    
</section>

<section class="content_two">
<div class="inner">
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
    
<!-- SECTION.CONTENT ends immediately after this -->

<?php get_footer(); ?>