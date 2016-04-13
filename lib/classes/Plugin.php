<?php
namespace Trendwerk\CsvExporter;

final class Plugin
{
    public function __construct()
    {
        add_action('plugins_loaded', array($this, 'localize'));
    }

    /**
     * Localisation
     */
    public function localize()
    {
        load_muplugin_textdomain(
            'csv-exporter',
            dirname(dirname(dirname(plugin_basename(__FILE__)))) . '/assets/languages/'
        );
    }
}
