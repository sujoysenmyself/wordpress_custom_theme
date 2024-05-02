<?php
    get_header();
    the_post();
?>

<div class="container">

<?php
 $imagepath = wp_get_attachment_image_src(get_post_thumbnail_id(),'large');  
?>
<img class="img-fluid" src="<?php echo $imagepath[0] ?>" width="100%">


<h3>
    <?php
        the_title()
    ?>
</h3>


<b>
    <?php
        echo get_the_date()
    ?>
</b>


<b>
    <?php
        the_author();
    ?>
</b>




    <?php
        the_content();
    ?>


    <?php
        comments_template();
    ?>

</div>

<?php
    get_footer()
?>
