<?php 
   get_header();  
?>

   <main class="main-content">
      <div class="wrapper">
         <?php get_template_part( 'tmp/breadcrumbs' ); ?>
      </div>
      <?php 
         if(have_posts()): 
            while(have_posts()): 
               the_post();
      ?>
      <article class="main-article wrapper">
         <header class="main-article__header">
            <img src="img/blog__article_full.jpg" alt="" class="main-article__thumb">
            <?php the_post_thumbnail('full', array('class'=> 'main-article__thumb') ); ?>
            <h1 class="main-article__h">
               <?php the_title(); ?>
            </h1>
         </header>
         <?php the_content(); ?>   
         <footer class="main-article__footer">
            <time datetime="<?php echo get_the_date('Y-m-d'); ?>"><?php echo get_the_date('d F Y'); ?></time>
         </footer>
      </article>
      <?php
         endwhile;
         endif; 
      ?>
   </main>

<?php 
   get_footer();
?>    