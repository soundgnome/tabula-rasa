<?php if (post_password_required()): ?>
<span class="comments-login">Please <a href="<?php echo wp_login_url(get_permalink()); ?>">log in</a> to view comments.</span>

<?php elseif (have_comments()): ?>
<div class="comments">
<h3 class="comments-title">Comments</h3>

<ul class="comments-list">
<?php wp_list_comments(); ?>
</ul>

<?php if ((get_comment_pages_count()>1) && (get_option('page_comments'))): ?>
<div class="comments-nav">
  <span><?php previous_comments_link(); ?></span>
  <span><?php next_comments_link(); ?></span>
</div>
<?php endif; ?>

<?php comment_form(); ?>

</div><!-- .comments -->
<?php endif; ?>
