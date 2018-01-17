<?php
// Airwave Consulting WordPress theme
// Designed by Lucas Lower @ AirwaveConsult.com
// the SINGLE-SERVICES.PHP file

get_header();
?>

<!-- SECTION.CONTENT comes immediately before this -->

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

<section class="content_header">

    <h1><?php the_title(); ?></h1>
    <h2><?php the_excerpt(); ?></h2>
    
</section>

<section class="content_one">
<div class="inner">
    <h1 class="link">Need this?<a class="two" href="/jobs/airwave/contact">Contact Us&nbsp;&nbsp;&nbsp;&rarr;</a></h1>
</div>
</section>

<section class="content_two single">
<div class="inner">
    <?php the_content(); ?>
</div>
</section>

<?php endwhile; endif; ?>
    
<!-- SECTION.CONTENT ends immediately after this -->

<?php get_footer(); ?>