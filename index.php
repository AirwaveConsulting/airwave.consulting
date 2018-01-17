<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the INDEX.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<section class="content_header">

    <h1>Our Blog</h1>
    <h2>Here you find our blog posts.</h2>
    
</section>

<section class="content_two">
<div class="inner">
    <ul class="services">
    <?php // main loop for blog
    
    while( have_posts() ) : the_post(); ?>
    
    <li>
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