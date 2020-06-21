<?php get_header(); ?>

<div class="blog">
    <div class="wrap">
    <h1>Filmes</h1>
        <div class="box-lists-filmes" id="box-lists-filmes">
            <?php query_posts('showposts=2&cat=3'); ?>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col s12 m7">
                <div class="card horizontal">
                    <div class="card-image">
                     <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>   
        <div class="box-lists-series" id="box-lists-series">
        <h1>Séries</h1>
        <?php query_posts('showposts=2&cat=2'); ?>
            <?php
            if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="col s12 m7">
                <div class="card horizontal">
                    <div class="card-image">
                     <?php the_post_thumbnail(); ?>
                    </div>
                    <div class="card-stacked">
                        <div class="card-content">
                        <h3><?php the_title(); ?></h3>
                        <?php the_excerpt(); ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php endwhile; endif; ?>
            <?php wp_reset_query(); ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>
	