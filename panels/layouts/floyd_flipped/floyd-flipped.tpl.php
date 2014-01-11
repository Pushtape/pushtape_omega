<?php
/**
 * @file
 * Template for Pushtape Floyd Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display floyd-flipped clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="floyd-flipped-container floyd-flipped-content-container clearfix">
    <div class="floyd-flipped-content floyd-flipped-content-region panel-panel">
      <div class="floyd-flipped-content-inner floyd-flipped-content-region-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
    <div class="floyd-flipped-sidebar floyd-flipped-content-region panel-panel">
      <div class="floyd-flipped-sidebar-inner floyd-flipped-content-region-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
  </div>
    
</div><!-- /.floyd-flipped -->
