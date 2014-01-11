<?php
/**
 * @file
 * Template for Pushtape Coltrane Double.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display coltrane-double clearfix <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>

  <div class="coltrane-double-container coltrane-double-header clearfix panel-panel">
    <div class="coltrane-double-container-inner coltrane-double-header-inner panel-panel-inner">
      <?php print $content['header']; ?>
    </div>
  </div>
  
  <div class="coltrane-double-container coltrane-double-column-content coltrane-double-first-column-content clearfix">
    <div class="coltrane-double-column-content-region coltrane-double-column1 coltrane-double-column panel-panel">
      <div class="coltrane-double-column-content-region-inner coltrane-double-column1-inner coltrane-double-column-inner panel-panel-inner">
        <?php print $content['column1']; ?>
      </div>
    </div>
    <div class="coltrane-double-column-content-region coltrane-double-column2 coltrane-double-column panel-panel">
      <div class="coltrane-double-column-content-region-inner coltrane-double-column2-inner coltrane-double-column-inner panel-panel-inner">
        <?php print $content['column2']; ?>
      </div>
    </div>
  </div>
  
  <div class="coltrane-double-container coltrane-double-middle clearfix panel-panel">
    <div class="coltrane-double-container-inner coltrane-double-middle-inner panel-panel-inner">
      <?php print $content['middle']; ?>
    </div>
  </div>
  
  <div class="coltrane-double-container coltrane-double-column-content coltrane-double-second-column-content clearfix">
    <div class="coltrane-double-column-content-region coltrane-double-column1 coltrane-double-column panel-panel">
      <div class="coltrane-double-column-content-region-inner coltrane-double-column1-inner coltrane-double-column-inner panel-panel-inner">
        <?php print $content['secondcolumn1']; ?>
      </div>
    </div>
    <div class="coltrane-double-column-content-region coltrane-double-column2 coltrane-double-column panel-panel">
      <div class="coltrane-double-column-content-region-inner coltrane-double-column2-inner coltrane-double-column-inner panel-panel-inner">
        <?php print $content['secondcolumn2']; ?>
      </div>
    </div>
  </div>
  
  <div class="coltrane-double-container coltrane-double-footer clearfix panel-panel">
    <div class="coltrane-double-container-inner coltrane-double-footer-inner panel-panel-inner">
      <?php print $content['footer']; ?>
    </div>
  </div>
  
</div><!-- /.coltrane-double -->
