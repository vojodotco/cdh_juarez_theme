<?php

/**
 * @file
 * Template file for map
 */
?>
<div class="row">
    <div class="twelvecol last">
        <?php if (!empty($rows)): ?>
          <div class='openlayers-views-map'><?php print $rows ?></div>
        <?php endif; ?>
    </div>
</div>