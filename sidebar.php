<!-- Begin Sidebar -->
<div id="sidebar">
   
    <!-- Begin Sub-Navigation -->
    <div id="sub-navigation" class="widget">
    <?php if (is_page()) : // if we are in "pages"... ?>
    <h2 class="sub-navigation-title">
    <?php echo get_the_title($post->post_parent); // ...get the gateway page title ?></h2>
    <ul class="sub-navigation-items"><?php 
    
    if ($post->post_parent) { // if the page has a parent...
        
        wp_list_pages(array('child_of' => $post->post_parent, 'title_li' => __(''))); // ...list the sub-pages with no title
        
    } else { // if the page does not have a parent...
    
        wp_list_pages(array('child_of' => $post->ID, 'title_li' => __(''))); // ...list the sub-pages with no title
     
    }
    
    ?></ul>
    <?php endif; // end if we are in "pages" ?>
    <?php if (!(is_page())) : // if we are not in "pages"... ?>
    <h2 class="sub-navigation-title">Blog</h2>
    <ul class="sub-navigation-items"><?php wp_list_categories(array('title_li' => __(''))); // ...list the categories with no title ?></ul>
    <?php endif; ?>
    </div>
    <!-- End Sub-Navigation -->
    
</div>
<!-- End Sidebar -->