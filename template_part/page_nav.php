<!-- Pagination Template -->

<div id="page_nav">
  <?php if ('mh_pagenav') {
    mh_pagenav();
  } else { ?>
    <?php next_posts_link(); ?>
    <?php previous_posts_link(); ?>
  <?php } ?>
</div>
