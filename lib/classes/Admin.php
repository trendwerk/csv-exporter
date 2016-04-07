<?php
/**
 * Menu's
 */

namespace Trendwerk\CSVExporter;

final class Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'menuPages'));
    }

    /**
     * Add admin menu page "Export"
     */
    public function menuPages()
    {
        add_menu_page(
            __('Export', 'tp-csv-exporter'),
            __('Export', 'tp-csv-exporter'),
            'publish_posts',
            'tp-csv-exporter',
            array($this, 'pageContent'),
            'dashicons-download'
        );
    }

    /**
     * Add content to admin menu page "Export"
     */
    public function pageContent()
    {
    ?>

    <div class="wrap tp-csv-exporter">
        <h1>
            <?php _e('Export posts to .csv', 'tp-csv-exporter'); ?>
        </h1>

        <form method="POST" enctype="multipart/form-data">

            <?php
                wp_nonce_field('tp-csv-exporter');
                submit_button(__('Export posts', 'tp-csv-exporter'));
            ?>

    	</form>
    </div>

    <?php
    }
}
