<?php snippet('header') ?>

<div class="pl-content">

  <h2 class="pl-pattern-headline">
    <a href="#"><?php echo html($page->title()) ?></a>
  </h2>

  <?php echo kirbytext($page->text()) ?>
</div>

<?php snippet('footer') ?>