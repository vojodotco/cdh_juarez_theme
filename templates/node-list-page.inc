<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="cdhj-story-list">
    <?php $item_num = 1; ?>
    <?php foreach ($rows as $id => $row): ?>
    <?php 
              $extra_css = "fourcol";
              if($item_num%3==0) {
                $extra_css.= " last";
              }
              if($item_num%3==1) print '<div class="row">';
          ?>
          <div class="<?php print $classes[$id]; ?>  <?php print $extra_css ?>">
    <?php       print $row; ?>
          </div>
    <?php
              if($item_num%3==0) print '</div>';
              $item_num = $item_num + 1;
    ?>
    <?php endforeach; ?>
</div>