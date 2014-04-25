<?php
/**
 * @file
 * Template for Pushtape Bonham.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display bonham clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="bonham-container bonham-header clearfix panel-panel row-fluid">
    <div class="bonham-container-inner bonham-header-inner panel-panel-inner span12">
      <?php print $content['header']; ?>
    </div>
  </div>
  
  <div class="bonham-container bonham-column-content clearfix row-fluid">
    <div class="bonham-column-content-region bonham-sidebar panel-panel span3">
      <div class="bonham-column-content-region-inner bonham-sidebar-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
    <div class="bonham-column-content-region bonham-content panel-panel span9">
      <div class="bonham-column-content-region-inner bonham-content-inner panel-panel-inner">
        <?php print $content['contentmain']; ?>
      </div>
    </div>
  </div>
</div><!-- /.bonham -->
