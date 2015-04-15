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