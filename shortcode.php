 <?php

    function custom_shortcode($args)
    {
        $args = shortcode_atts(
            array(
                'category' => '',
            ),
            $args
        );
        $arg = array(
            'post_type' => 'tx_pop_up',
            'posts_per_page' => -1,
            'orderby' => 'rand',
            'order' => 'ASC',
            'category_name' => $args['category']
        );

        $the_query = new WP_Query($arg);


    ?>

     <?php ob_start(); ?>

     <section class="cards__modal">

         <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 <?php
                               

                    ccm_get_template_part('template/content', 'card');

                endwhile;

            endif;

            ?>
     </section>


  
 <?php
        return ob_get_clean();
      
    }
add_shortcode('popup-pdf', 'custom_shortcode');




/* SHORTCODE SMALL */ 

function custom_shortcode_small($args)
    {
        $args = shortcode_atts(
            array(
                'category' => '',
            ),
            $args
        );
        $arg = array(
            'post_type' => 'tx_pop_up',
            'posts_per_page' => -1,
            'orderby' => 'rand',
            'order' => 'ASC',
            'category_name' => $args['category']
        );

        $the_query = new WP_Query($arg);


    ?>

     <?php ob_start(); ?>

     <section class="cards__modal">

         <?php if ($the_query->have_posts()) : while ($the_query->have_posts()) : $the_query->the_post(); ?>
                 <?php
                               

                    ccm_get_template_part('template/content', 'card');

                endwhile;

            endif;

            ?>
     </section>


  
 <?php
        return ob_get_clean();
      
    }
add_shortcode('popup-pdf-small', 'custom_shortcode_small');