<?php
/**
 * @file
 * Template for Pushtape Santana.
 *
 * Variables:
 * - $css_id: An optional CSS id to use for the layout.
 * - $content: An array of content, each item in the array is keyed to one
 * panel of the layout. This layout supports the following sections:
 */
?>

<div class="panel-display santana clearfix container <?php if (!empty($class)) { print $class; } ?>" <?php if (!empty($css_id)) { print "id=\"$css_id\""; } ?>>
  <div class="row-fluid">
    <div class="santana-sidebar santana-column-content-region santana-column santana-container panel-panel span4">
      <div class="santana-sidebar-inner santana-column-content-region-inner santana-column-inner santana-container-inner panel-panel-inner">
        <?php print $content['sidebar']; ?>
      </div>
    </div>

    <div class="santana-content-container santana-container span8">
      <div class="santana-content-container-inner santana-container-inner">
        <div class="santana-column-content-region santana-content-header clearfix panel-panel row-fluid">
          <div class="santana-column-content-region-inner santana-content-header-inner panel-panel-inner span12">
            <?php print $content['contentheader']; ?>
          </div>
        </div>

        <div class="santana-content-container-column-container clearfix row-fluid">
          <div class="santana-content-container-column-container-inner">
            <div class="santana-column-content-region santana-content-column1 santana-column panel-panel span6">
              <div class="santana-column-content-region-inner santana-content-column1-inner santana-column-inner panel-panel-inner">
                <?php print $content['contentcolumn1']; ?>
              </div>
            </div>
            <div class="santana-column-content-region santana-content-column2 santana-column panel-panel span6">
              <div class="santana-column-content-region-inner santana-content-column2-inner santana-column-inner panel-panel-inner">
                <?php print $content['contentcolumn2']; ?>
              </div>
            </div>
          </div>
        </div><!-- /.santana-content-container-column-container -->

        <div class="santana-column-content-region santana-content-footer clearfix panel-panel row-fluid">
          <div class="santana-column-content-region-inner santana-content-footer-inner panel-panel-inner span12">
            <?php print $content['contentfooter']; ?>
          </div>
        </div>
      
      </div>
    </div><!-- /.santana-content-container -->
  </div>
</div><!-- /.santana -->
