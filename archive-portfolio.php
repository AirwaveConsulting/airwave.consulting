<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the ARCHIVE-PORTFOLIO.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<section class="content_header">

    <h1>Our Work</h1>
    <h2>Our portfolio ranges from simple static websites to in-depth, dynamic<br>websites that are constantly being updated.</h2>
    
</section>

<section class="content_two">
<div class="inner">
    <ul class="portfolio">
    <?php // custom loop for the services
    
    $args = array('post_type' => 'portfolio', 'posts_per_page' => -1, 'order' => 'ASC', 'orderby' => 'menu_order');
    $portfolio_query = new WP_Query($args);
    
    while( $portfolio_query->have_posts() ) : $portfolio_query->the_post(); ?>
    
    <li>
        <img title="<?php the_title(); ?>" src="<?php the_post_thumbnail_url('large'); ?>">
        <div class="wrap">
        <h2><?php the_title(); ?></h2>
        <p><?php the_excerpt(); ?></p>
        <a href="<?php echo get_permalink(); ?>">READ MORE</a>
        </div>
    </li>
    
    <?php endwhile; ?>
    
    </ul>
</div>
</section>
    
<!-- SECTION.CONTENT ends immediately after this -->

<?php get_footer(); ?>