<?php get_header(); ?>

    <!-- Begin Flex Slider -->
    <div class="flexslider">
        <ul class="slides">
        <li><img src="http://www.web170.premiumdw.com/templates/images/img-slide-01.jpg" width="940" height="400" alt="Image One"></li>
        <li><img src="http://www.web170.premiumdw.com/templates/images/img-slide-02.jpg" width="940" height="400" alt="Image Two"></li>
        <li><img src="http://www.web170.premiumdw.com/templates/images/img-slide-03.jpg" width="940" height="400" alt="Image Three"></li>
        </ul>
    </div>
    <!-- End Flex Slider -->
    
    <!-- Begin Widgets -->
    <div id="widgets">
        <section class="widget-item">
        <h2>About Me:</h2>
        <?php if ( have_posts() ) : while( have_posts() ) : the_post(); // start loop one ?>
        <?php the_content(''); // get the home page's content ?>
        <?php endwhile; endif; // end loop one ?>
        </section>
        <section class="widget-item">
        <h2>Latest Postings:</h2>
        <ul>
		<?php rewind_posts(); // stop loop one ?>
        <?php query_posts('showposts=4'); // give directions to loop two ?>
        <?php while (have_posts()) : the_post(); // start loop two ?>
        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; // end loop two ?>
        </ul>
        </section>
        <section class="widget-item">
        <h2>Contact Me:</h2>
        <p><strong>Phone: </strong>206.543.2567<br><strong>Email: </strong><a href="mailto:sinkum@uw.edu">sinkum@uw.edu</a></p>
        <p>428 Sieg Hall<br>University of Washington<br>Seattle, WA 98195</p> 
        </section>
    </div>
    <!-- End Widgets -->

<?php get_footer(); ?>