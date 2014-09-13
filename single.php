<?php
get_header();
if (have_posts()): while (have_posts()): the_post();
?>

<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<h1 class="post-title"><?php the_title(); ?></h1>
<span class="by-line"><?php the_date(); ?> by <?php the_author(); ?></span>

<div class="post-content">
    <?php
        the_post_thumbnail();
        the_content();
    ?>
</div>

<?php wp_link_pages(); ?>
<div class="post-meta">Posted under <?php the_category(", "); ?>.<?php the_tags(' Tags: ', ', ', '.'); ?><br />
<?php comments_popup_link('No comments yet', '1 comment', '% comments',
  'comments-link', ''); ?></div>
<?php
    comments_template();
    endwhile;
?>
</div>

<?php else: ?>
<div class="post">
<p>Post not found.</p>
</div>

<?php
    endif;
    get_footer();
?>
