<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title><?php bloginfo('description'); ?> | <?php bloginfo('name'); ?> | Seattle, WA.</title>

<!-- Begin Meta -->
<meta name="viewport" content="user-scalable=no, initial-scale=1.0, maximum-scale=1.0" />
<!-- End Meta -->

<!-- Begin Styles -->
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="all" />
<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/flexslider.css" type="text/css">
<!-- End Styles -->

<!-- Begin Scripts -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script src="<?php bloginfo('template_directory'); ?>/scripts/jquery.flexslider.js"></script>
<!-- End Scripts -->

<!-- Begin Flex Slider -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
    $('.flexslider').flexslider(); // call flexslider function
  });
</script>
<!-- End Flex Slider -->

<!-- Begin Toggle Menu -->
<script type="text/javascript" charset="utf-8">
  $(window).load(function() { // enable function upon window load
	$("#toggle").click(function() { // when toggle is clicked...
		$("#navigation").toggle(); // ... open or close the navigation
	});
  });
</script>
<!-- End Toggle Menu -->

<!-- Start WP Head -->
<?php wp_head(); ?>
<!-- End WP Head -->

</head>
<body>

<!-- Begin Header -->
<div id="header">
<h1 id="logo"><a href="#">Mike Sinkula</a></h1>
<img id="toggle" src="<?php bloginfo('template_directory'); ?>/images/img-toggle.png" width="25" height="25" alt="Toggle Menu">
</div>
<!-- End Header -->

<!-- Begin Navigation -->
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'container' => 'div','container_id' => 'navigation', 'items_wrap' => '<ul id="navigation-items" class="%2$s">%3$s</ul>', ) ); ?>
<!-- End Navigation -->

<!-- Begin Content -->
<div id="middle">

    <!-- Begin Text -->
    <div id="content">
    <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); // start the loop ?>
    <h2><a href="<?php the_permalink(); // link to the page or posting ?>"><?php the_title(); // get the page or posting title ?></a></h2> 
    <?php the_content(''); // get page or posting written content ?>
    <?php endwhile; endif; // end the loop ?>
    </div>
    <!-- End Text -->
    
    <!-- Begin Sidebar -->
    <div id="sidebar">
       
        <!-- Begin Sub-Page Navigation -->
        <?php	
        
        if ($post->post_parent) { // if has a post parent
                
            $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0" ); 
            $parentname = get_the_title($post->post_parent);
    
        } else { // if does not have a post parent
    
            $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0" ); 
            $parentname = get_the_title($post->ID);
        
        }
    
        if ($children) {  // if has children ?>
    
            <div id="sub-navigation" class="widget">
            <h2 class="sub-navigation-title"><?php echo $parentname; ?></h2>
            <ul class="sub-navigation-items">
            <?php echo $children; ?>
            </ul>
            </div>
            
        <?php } ?> 
        <!-- End Sub-Page Navigation -->
    
    </div>
    <!-- End Sidebar -->
    
</div>
<!-- End Content -->

<!-- Begin Footer -->
<div id="footer">
<p>&copy;2014 <a href="http://www.mikesinkula.com/">Mike Sinkula</a>. All rights reserved.</p>
</div>
<!-- End Footer -->

<!-- Start WP Footer -->
<?php wp_footer(); ?>
<!-- End WP Footer -->

</body>
</html>