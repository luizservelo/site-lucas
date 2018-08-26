# BOILERPLATE LUCAS - WORDPRESS & BOOTSTRAP

TEMA WORDPRESS 

    themes/
        theme-folder/
            screenshot.png 
            functions.php
            style.css (Info do tema)
            index.php (listagem de post)
            header.php 
            footer.php
            header-simples.php * 
            footer-simples.php *
            front-page.php (Página inicial estática - Ajustes do WP)
            assets/
                _js/
                    jquery.js
                    bootstrap.js
                    scripts.js
                _css/
                    bootstrap.min.css
                    style.css
                _images/
            single.php
		

ACF PRO 

Recuperar campos no frontend

    <?php 
        
        Tipo Simples de Custom Field

        the_field('nome-do-campo');
        $varx = get_field('nome-do-campo');
        get_field('nome-do-campo');

        Tipo Repetidor 
        
        while(have_rows()) :
    the_row();
            the_sub_field('nome-do-campo');
        endwhile;

    ?>

