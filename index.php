<?php get_header(); ?>

    <!-- Begin Content -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <article class="post-excerpt">
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2> 
    <small>Posted on <?php the_time('F j, Y'); // get the time ?> by <?php the_author(); // get the author name ?> in <?php the_category(', '); // get the category ?></small>
    <a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_post_thumbnail( 'thumbnail' ); ?></a>
    <?php the_excerpt(); // get the posting's excerpt ?>
    <p class="read-more"><a href="<?php the_permalink(); // link to the page or posting ?>">Read More &raquo;</a></p>
    </article>
    <?php endwhile; endif; // end the loop ?>
    <small>index.php</small>
    </div>
    <!-- End Content -->
    
<?php get_sidebar(); ?>
<?php get_footer(); ?>