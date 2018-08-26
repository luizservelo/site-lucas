<?php 

get_header();
the_post();

?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <img src="<?php the_field('banner') ?>" alt="">
                <?php the_title() ?>
                <?php the_content() ?>

            </div>
        </div>
    </div>
</main>

<?php 

get_footer();

?>