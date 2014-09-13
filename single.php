<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>

<div class="post-wrapper" id="post-<?php the_ID(); ?>">
<h1 class="post-title"><?php the_title(); ?></h1>
<span class="by-line"><?php the_date(); ?> by <?php the_author(); ?></span>

<div class="post-content">
  <?php the_content();  ?>
</div>

<div class="post-meta">Posted under <?php the_category(", "); ?>.<?php the_tags(' Tags: ', ', ', '.'); ?><br />
<?php comments_popup_link('No comments yet', '1 comment', '% comments',
  'comments-link', ''); ?></div>
<?php
  comments_template();
  endwhile;
?>
</div><!-- .post-wrapper -->

<?php else: ?>
<div class="post-wrapper">
Post not found.
</div><!-- .post-wrapper -->

<?php
  endif;
  get_footer();
?>
