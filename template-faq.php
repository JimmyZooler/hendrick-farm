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
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-1" aria-expanded="false" aria-controls="answer-block-1">
                +
              </a>
              <p class="question"><?php the_field('question_1'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-1">
              <div class="card card-body">
                <p><?php the_field('answer_1'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-2" aria-expanded="false" aria-controls="answer-block-2">
                +
              </a>
              <p class="question"><?php the_field('question_2'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-2">
              <div class="card card-body">
                <p><?php the_field('answer_2'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-3" aria-expanded="false" aria-controls="answer-block-3">
                +
              </a>
              <p class="question"><?php the_field('question_3'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-3">
              <div class="card card-body">
                <p><?php the_field('answer_3'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-4" aria-expanded="false" aria-controls="answer-block-4">
                +
              </a>
              <p class="question"><?php the_field('question_4'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-4">
              <div class="card card-body">
                <p><?php the_field('answer_4'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-5" aria-expanded="false" aria-controls="answer-block-5">
                +
              </a>
              <p class="question"><?php the_field('question_5'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-5">
              <div class="card card-body">
                <p><?php the_field('answer_5'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-6" aria-expanded="false" aria-controls="answer-block-6">
                +
              </a>
              <p class="question"><?php the_field('question_6'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-6">
              <div class="card card-body">
                <p><?php the_field('answer_6'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-7" aria-expanded="false" aria-controls="answer-block-7">
                +
              </a>
              <p class="question"><?php the_field('question_7'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-7">
              <div class="card card-body">
                <p><?php the_field('answer_7'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-8" aria-expanded="false" aria-controls="answer-block-8">
                +
              </a>
              <p class="question"><?php the_field('question_8'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-8">
              <div class="card card-body">
                <p><?php the_field('answer_8'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-9" aria-expanded="false" aria-controls="answer-block-9">
                +
              </a>
              <p class="question"><?php the_field('question_9'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-9">
              <div class="card card-body">
                <p><?php the_field('answer_9'); ?></p>
              </div>
            </div>
        
        </div>
        
        <div class="question-block">
        
            <div class="question-header">
              <a class="btn btn-primary" data-toggle="collapse" href="#answer-block-10" aria-expanded="false" aria-controls="answer-block-10">
                +
              </a>
              <p class="question"><?php the_field('question_10'); ?></p>
            </div>
            
            <div class="collapse answer-block" id="answer-block-10">
              <div class="card card-body">
                <p><?php the_field('answer_10'); ?></p>
              </div>
            </div>
        
        </div>
        
    </div>
    

</div><!-- Wrapper end -->

<?php get_footer(); ?>
