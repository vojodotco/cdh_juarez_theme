<?php
// $Id: views-view-unformatted.tpl.php,v 1.6 2008/10/01 20:52:11 merlinofchaos Exp $
/**
 * @file views-view-unformatted.tpl.php
 * Default simple view template to display a list of rows.
 *
 * @ingroup views_templates
 */
?>

<?php if (!empty($title)): ?>
  <h3><?php print $title; ?></h3>
<?php endif; ?>

<div class="cdhj-story-list">
    <?php $row_num = 1; ?>
    <?php foreach ($rows as $id => $row): ?>
    <?php 
              $extra_css = "fourcol";
              if($row_num%3==0) {
                $extra_css.= " last";
              }
              if($row_num%3==1) print '<div class="row">';
          ?>
          <div class="<?php print $classes[$id]; ?>  <?php print $extra_css ?>">
    <?php       print $row; ?>
          </div>
    <?php
              if($row_num%3==0) print '</div>';
              $row_num = $row_num + 1;
    ?>
    <?php endforeach; ?>
</div>