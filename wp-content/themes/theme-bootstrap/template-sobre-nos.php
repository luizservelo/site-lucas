<?php 

/*
 *
 *  Template name: Sobre nós 
 * 
 */


get_header();
the_post();

?>

<main>
    <img src="<?= get_field('banner') ?>" alt="">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">

                <?php echo do_shortcode('[contact-form-7 id="35" title="Formulário de contato 1"]') ?>

            </div>
        </div>
    </div>
</main>

<?php 

get_footer();

?>