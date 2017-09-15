<?php
/**
 * Template Name: FAQ Page Template
 *
 * This is the template that displays the FAQ page.
 *
 * @package understrap
 */

get_header();

?>

<div id="page-wrapper">

    <header class="page-header dark" style="background-image: url('<?php the_field('header_image') ?>'); ">
    
        <div class="heading-wrap">
            
            <?php the_title( '<h1 class="page-title">', '</h1>' ); ?>
        
            <h3 class="page-subtitle hidden-md-down"><?php the_field('header_subtitle'); ?></h3>
            
        </div>
    
    </header>
    
    <div class="container-fluid fixed-width" id="faq">

        <div id="faq-content-block" class="content-block">
        
            <p><?php the_field('paragraph_content'); ?></p>
        
        </div>
        
        <?php if( have_rows('frequently_asked_questions') ): ?>
                
            <?php $count = 1;

            while( have_rows('frequently_asked_questions') ): the_row(); 

                // vars
                $question = get_sub_field('question');
                $answer = get_sub_field('answer');
                $link = get_sub_field('link');

                ?>
                
                <div class="question-block">
        
                    <div class="question-header">
                      <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-<?php echo $count; ?>" aria-expanded="false" aria-controls="answer-block-<?php echo $count; ?>">
                        +
                      </a>
                      <p class="question"><?php echo $question; ?></p>
                    </div>

                    <div class="collapse answer-block" id="answer-block-<?php echo $count; ?>">
                      <div class="card card-body">
                        <p><?php echo $answer; ?></p>
                      </div>
                    </div>

                </div>
        
            <?php ++$count;

            endwhile; ?>

        <?php endif; ?>
        
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
