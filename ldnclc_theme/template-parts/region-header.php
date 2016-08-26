<div class="row">
    <div class="spacer20"></div>
    <div class="col-md-12">
        <ol class="breadcrumb">
            <?php echo get_breadcrumbs(); ?>
        </ol>
    <hr>
    </div>
    <div class="col-md-12">
       <h1 class="page-header services-header"">
            <?php 
            if ( is_home() && ! is_front_page() ) { 
                single_post_title(); 
            } else {
                the_title(); 
            } ?>
        </h1>
    </div>
</div>
<hr>
