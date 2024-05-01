<?php
    get_header();
?>


    <!-- Body Contend is started here -->
    <div class="container">
        <div class="row">
          <?php
              while(have_posts()) {
              the_post();  
              $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');  
          ?>
           
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top img-fluid" src="<?php echo $imagepath[0] ?>" alt="Card image cap" >
                    <div class="card-body">
                      <h5 class="card-title"><?php the_title() ?></h5>
                      <?php the_date() ?>
                      <p class="card-text"><?php the_excerpt() ?></p>
                      <a href="#" class="btn btn-primary">See More</a>
                    </div>
                  </div>
            </div>
          <?php
              }
          ?>  
        </div>
    </div>
    <!-- Body Contend is ended here -->




   <?php
    get_footer();
    ?>