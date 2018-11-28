<?php get_header(); ?>


<div class="containerCenter short singleProduct__page">

    <?php
        global $post;
        $content = $post->post_content;
        echo $content;
    ?>

</div>


<?php get_footer(); ?>
