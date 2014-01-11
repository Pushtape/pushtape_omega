<?php
/**
 * @file
 * Template for Pushtape Bonham Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display bonham-flipped clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="bonham-flipped-container bonham-flipped-header clearfix panel-panel">
    <div class="bonham-flipped-container-inner bonham-flipped-header-inner panel-panel-inner">
      <?php print $content['header']; ?>
    </div>
  </div>
  
  <div class="bonham-flipped-container bonham-flipped-column-content clearfix">
    <div class="bonham-flipped-column-content-region bonham-flipped-content panel-panel">
      <div class="bonham-flipped-column-content-region-inner bonham-flipped-content-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
    <div class="bonham-flipped-column-content-region bonham-flipped-sidebar panel-panel">
      <div class="bonham-flipped-column-content-region-inner bonham-flipped-sidebar-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
  </div>
  
</div><!-- /.bonham-flipped -->
