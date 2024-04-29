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
    the_post_thumbnail();
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