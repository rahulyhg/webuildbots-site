<?php
// =============================================================================
// GLOBAL-CONTENT.PHP
// -----------------------------------------------------------------------------
// This file contain generic contents for the admin
// =============================================================================
?>
<div id="popover-box-icon-menu" class="popover-box popover-icon search-filter" data-search-class="sch" style="display: none">
    <span class="close-button"></span>
    <div class="input-text input-row">
        <p><?php esc_attr_e("Search icon","hc") ?></p>
        <input class="search" placeholder="<?php esc_attr_e("Search","hc") ?>..." />
    </div>
    <div class="upload-box upload-row full-input">
        <span class="close-button"></span>
        <div class="upload-container">
            <div class="upload-btn upload-btn-menu upload-img-box"></div>
        </div>
    </div>
    <?php 
    $icons_family = hc_get_setting('icons-family'); 
    if ($icons_family == "font-awesome" || strlen($icons_family) < 2) $icons_family = "font-awesome-list";
    if ($icons_family == "icons-mind-line") $icons_family = "icons-mind-line-list";
    if ($icons_family == "icons-mind-solid") $icons_family = "icons-mind-solid-list";
    ?>
    <ul class="list scroll-content <?php echo esc_attr($icons_family) ?>" data-height="210">
    </ul>
</div>

