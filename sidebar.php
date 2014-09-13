<ul class="sidebar-widgets">
<?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar()) : ?>
<li style="display:none;"><!-- ul must have li to be valid --></li>
<?php endif; ?>
</ul>