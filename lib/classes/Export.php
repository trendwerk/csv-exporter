<?php
namespace Trendwerk\CsvExporter;

final class Export
{
    public function __construct()
    {
        add_action('admin_post_export_csv', array($this, 'export'));
    }

    /**
     * Export posts to .csv
     */
    public function export()
    {
        if (! check_admin_referer('csv-exporter')) {
            return;
        }

        /**
         * Get required data
         */
        $items = get_posts(array(
            'post_type'      => 'post',
            'posts_per_page' => -1,
        ));

        foreach ($items as $item) {
            $rows[] = array(
                'id'      => $item->ID,
                'title'   => $item->post_title,
                'content' => $item->post_content,
                'field'   => get_post_meta($item->ID, 'field', true),
            );
        }

        /**
         * Write data to .csv file
         */
         header('Content-Type: text/csv; charset=utf-8');
         header('Content-Disposition: attachment; filename=export.csv');

        $file = fopen('php://output', 'w');

        fputcsv($file, array_keys($rows[0]));

        foreach ($rows as $row) {
            fputcsv($file, $row);
        }

        fclose($file);
    }
}
