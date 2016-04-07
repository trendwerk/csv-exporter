<?php
/**
 * Menu's
 */

namespace Trendwerk\CSVExporter;

final class Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'menu'));
    }

    /**
     * Register menu pages
     */
    public function menu()
    {
        add_menu_page(
            __('Export', 'tp-csv-exporter'),
            __('Export', 'tp-csv-exporter'),
            'publish_posts',
            'tp-csv-exporter',
            array($this, 'exportPage'),
            'dashicons-download'
        );
    }

    /**
     * Export menu page
     */
    public function exportPage()
    {
    ?>

    <div class="wrap tp-csv-exporter">
        <h1>
            <?php _e('Export posts to .csv', 'tp-csv-exporter'); ?>
        </h1>
    </div>

    <?php
    }
}
