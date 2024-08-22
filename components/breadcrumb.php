<?php
function renderBreadcrumb($breadcrumbs) {
    echo '<!-- Breadcrumb Begin -->';
    echo '<div class="breadcrumb-option">';
    echo '<div class="container">';
    echo '<div class="row">';
    echo '<div class="col-lg-12">';
    echo '<div class="breadcrumb__links">';

    foreach ($breadcrumbs as $index => $breadcrumb) {
        if ($index == 0) {
            // Home breadcrumb with icon
            echo '<a href="' . htmlspecialchars($breadcrumb['url']) . '"><i class="icon_house"></i> ' . htmlspecialchars($breadcrumb['label']) . '</a>';
        } elseif ($index == count($breadcrumbs) - 1) {
            // Last breadcrumb without a link (current page)
            echo '<span>' . htmlspecialchars($breadcrumb['label']) . '</span>';
        } else {
            // Intermediate breadcrumb links
            echo '<a href="' . htmlspecialchars($breadcrumb['url']) . '">' . htmlspecialchars($breadcrumb['label']) . '</a>';
        }
    }

    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '</div>';
    echo '<!-- Breadcrumb End -->';
}
