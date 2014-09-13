<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>

<div class="post-wrapper" id="page-<?php the_ID(); ?>">
<h1 class="post-title"><?php the_title(); ?></h1>
<div class="post-content">
  <?php the_content(); ?>
</div><!-- .post-content -->
<?php comments_template(); ?>
</div><!-- .post-wrapper -->

<?php endwhile; else: ?>

<div class="post-wrapper">
Page not found.
</div>

<?php
  endif;
  get_footer();
?>
