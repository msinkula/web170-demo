<?php get_header(); ?>

    <!-- Begin Content -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); // get the page or posting title ?></h2>
    <small>Posted on <?php the_time('F j, Y'); // get the time ?> by <?php the_author(); // get the author name ?> in <?php the_category(', '); // get the category ?></small>
    <?php the_post_thumbnail( 'large' ); // get the featured image ?>
    <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    <small>single.php</small>
    </article>
    </div>
    <!-- End Content -->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>