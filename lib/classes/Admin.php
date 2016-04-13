<?php
namespace Trendwerk\CsvExporter;

final class Admin
{
    public function __construct()
    {
        add_action('admin_menu', array($this, 'addMenuPage'));
    }

    /**
     * Add admin menu page "Export"
     */
    public function addMenuPage()
    {
        add_menu_page(
            __('Export', 'csv-exporter'),
            __('Export', 'csv-exporter'),
            'publish_posts',
            'csv-exporter',
            array($this, 'displayPage'),
            'dashicons-upload'
        );
    }

    /**
     * Add content to admin menu page "Export"
     */
    public function displayPage()
    {
    ?>

    <div class="wrap">
        <h1>
            <?php _e('Export posts to .csv', 'csv-exporter'); ?>
        </h1>

        <form action="<?php echo admin_url('admin-post.php'); ?>">
            <input type="hidden" name="action" value="export_csv">
            <?php
                wp_nonce_field('csv-exporter');
                submit_button(__('Export posts', 'csv-exporter'));
            ?>
        </form>
    </div>

    <?php
    }
}
