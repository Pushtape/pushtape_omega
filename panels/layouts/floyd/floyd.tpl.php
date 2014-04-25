<?php
/**
 * @file
 * Template for Pushtape Floyd.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display floyd clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="floyd-container floyd-content-container clearfix row-fluid">
    <div class="floyd-sidebar floyd-content-region panel-panel span4">
      <div class="floyd-sidebar-inner floyd-content-region-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
    <div class="floyd-content floyd-content-region panel-panel span8">
      <div class="floyd-content-inner floyd-content-region-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>
    
</div><!-- /.floyd -->
