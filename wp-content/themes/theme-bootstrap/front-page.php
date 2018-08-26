<?php 

get_header();
the_post();

?>

<main>
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    
  <?php
    $i = 0;

    while(have_rows('slider')) : the_row();
        if($i == 0){
            $active = "active";
        }
        else{
            $active = "";
        }
    ?>
        <li data-target="#carousel-example-generic" data-slide-to="<?= $i ?>" class="<?= $active?>"></li>
    <?php 
        $i++;
    endwhile;
    
    ?>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">

    <?php
    $i = 0;

    while(have_rows('slider')) : the_row();
        if($i == 0){
            $active = "active";
        }
        else{
            $active = "";
        }
    ?>

    <div class="item <?= $active ?>">
      <img src="<?php the_sub_field('slider-imagem')?>" alt="...">
      <div class="carousel-caption">
        <h2><?php the_sub_field('slider-descricao')?></h2>
      </div>
    </div>

    <?php 
        
        $i++;
    endwhile;
    
    ?>

  </div>
</div>

    <section>
        <br><br><br>
        <div class="container">
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="<?php the_field('progressbar') ?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php the_field('progressbar') ?>%;">
                    <?php the_field('progressbar') ?>%
                </div>
            </div>
        </div>
        <br><br><br>
    </section>

    <section>

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>Posts do Blog</h2>
                </div>

                <?php 

                // Recuperar Posts 

                $args = [
                    'post_type' => 'imovel',
                    'posts_per_page' => 3
                ];

                $posts = new WP_Query($args);

                while($posts->have_posts()) : 
                    $posts->the_post();

                ?>
                    <div class="col-md-4">

                        <h3><?php the_title(); ?></h3>
                        <p><?php the_excerpt(); ?></p>

                    </div>
                <?php 

                endwhile;
                
                wp_reset_postdata();

                ?>

            </div>
        </div>

    </section>

</main>

<?php 

get_footer();

?>