<?php
/**
 * @file
 * Template for Pushtape Santana Flipped.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display santana-flipped clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <div class="santana-flipped-content-container santana-flipped-container span8">
      <div class="santana-flipped-content-container-inner santana-flipped-container-inner">
      
        <div class="santana-flipped-column-content-region santana-flipped-content-header clearfix panel-panel row-fluid">
          <div class="santana-flipped-column-content-region-inner santana-flipped-content-header-inner panel-panel-inner span12">
            <?php print $content['contentheader']; ?>
          </div>
        </div>

        <div class="santana-flipped-content-container-column-container clearfix">
          <div class="santana-flipped-content-container-column-container-inner row-fluid">
            <div class="santana-flipped-column-content-region santana-flipped-content-column1 santana-flipped-column panel-panel span6">
              <div class="santana-flipped-column-content-region-inner santana-flipped-content-column1-inner santana-flipped-column-inner panel-panel-inner">
                <?php print $content['contentcolumn1']; ?>
              </div>
            </div>
            <div class="santana-flipped-column-content-region santana-flipped-content-column2 santana-flipped-column panel-panel span6">
              <div class="santana-flipped-column-content-region-inner santana-flipped-content-column2-inner santana-flipped-column-inner panel-panel-inner">
                <?php print $content['contentcolumn2']; ?>
              </div>
            </div>
          </div>
        </div><!-- /.santana-flipped-content-container-column-container -->

        <div class="santana-flipped-column-content-region santana-flipped-content-footer clearfix panel-panel row-fluid">
          <div class="santana-flipped-column-content-region-inner santana-flipped-content-footer-inner panel-panel-inner span12">
            <?php print $content['contentfooter']; ?>
          </div>
        </div>

      </div>
    </div><!-- /.santana-flipped-content-container -->

    <div class="santana-flipped-sidebar santana-flipped-column-content-region santana-flipped-column santana-flipped-container panel-panel span4">
      <div class="santana-flipped-sidebar-inner santana-flipped-column-content-region-inner santana-flipped-column-inner santana-flipped-container-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>
  </div>
</div><!-- /.santana-flipped -->
