<?php get_header(); ?>

    <!-- Begin Content -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article id="post-<?php the_ID(); ?>" class="post">
    <h2><?php the_title(); // the posting title ?></h2>
    <small>Posted on <?php the_time('F j, Y'); // the time ?> by <?php the_author(); // the author name ?> in <?php the_category(', '); // the category ?></small>
    <?php the_post_thumbnail( 'large' ); // the featured image ?>
    <?php the_content(''); // posting written content ?>
    </article>
    <?php endwhile; endif; // end the loop ?>
    <small>single.php</small>
    </div>
    <!-- End Content -->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>