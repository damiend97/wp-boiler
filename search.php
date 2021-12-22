<?php get_header(); ?>
<?php
    if( have_posts()) {
        while( have_posts() ) {
            the_post();
            
            get_template_part('template-parts/content', 'archive');
        }
    }
?>

<?php
    // automatic post page pagination with links
    the_posts_pagination();
?>
    
<?php get_footer(); ?>