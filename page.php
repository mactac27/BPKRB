<?php /* Template Name: CustomPageT1 */ ?>

<div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">
                                <?php
                                echo "<p> IN HERE </p>";
                                while ( have_posts() ) : the_post();

                                                // Include the page content template.
                                                get_template_part( 'template-parts/content', 'page' );

                                                // If comments are open or we have at least one comment, load up the comment template.
                                                if ( comments_open() || get_comments_number() ) {
                                                                comments_template();
                                                }

                                               
                                endwhile;
                                ?>

                </main>

</div>
<?php get_footer(); ?>
