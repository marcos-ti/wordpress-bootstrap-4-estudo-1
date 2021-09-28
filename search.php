<?php get_header(); ?>
<div id="primary">
    <div id="main">
        <div class="container">

            <h2>Search results for: </h2><?php echo get_search_query();
?>
            <?php

            get_search_form(  );

                while (have_posts(  )) : the_post(  );
                    get_template_part( 'template-parts/content', 'search' );

                    if(comments_open() || comments_number()) :
                        comments_template();
                    endif;    

                endwhile;

                // Paginacao
                the_posts_pagination(
                    array(
                        'prev_text' => 'Previous',
                        'next_text' => 'Next'
                    )
                );
            ?>
        </div>
    </div>
</div>
<?php get_footer(); ?>