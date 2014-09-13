<?php get_header(); ?>

<div class="posts">
<?php if (have_posts()): while (have_posts()): the_post(); ?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="post-title"><a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a></h1>
<span class="by-line"><?php the_date(); ?> by <?php the_author(); ?></span>

<div class="post-content">
  <?php the_content(); ?>
</div>

<div class="post-meta">Posted under <?php the_category(", "); ?>. <?php the_tags(); ?><br />
<?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', ''); ?></div>
</div>

<?php
    endwhile;
    posts_nav_link();
    else:
?>
<p>No posts found.</p>
<?php endif; ?>
</div>

<?php get_footer(); ?>
