<?php
/**
 * Menu's
 */

namespace Trendwerk\CSVExporter;

final class Localisation
{
    public function __construct()
    {
        add_action('plugins_loaded', array($this, 'localization'));
    }

    /**
     * Localisation
     */
    public function localization()
    {
        load_muplugin_textdomain(
            'tp-csv-exporter',
            dirname(dirname(dirname(plugin_basename(__FILE__)))) . '/assets/languages/'
        );
    }
}
