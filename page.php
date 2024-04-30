<?php 
    get_header();
    the_post();
?>    


<div class="container">

<div>

<?php
    the_title();
?>

</div>


<div>

<?php
    // Check if the device is a mobile device
    function is_mobile_device() {
        return preg_match("/(android|avantgo|blackberry|bolt|boost|cricket|docomo|fone|hiptop|mini|mobi|palm|phone|pie|tablet|up\.browser|up\.link|webos|wos)/i", $_SERVER["HTTP_USER_AGENT"]);
    }

    // Set the thumbnail size based on the device type
    $thumbnail_size = is_mobile_device() ? 'medium' : 'large';

    // Output the post thumbnail using the appropriate size
    the_post_thumbnail($thumbnail_size);
?>

</div>

<div>

<?php
    the_content();
?> 

</div>

</div>



<?php 
    get_footer();
?> 