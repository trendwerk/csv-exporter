<?php
/**
 * Plugin Name: CSV Exporter
 * Description: Starter plugin for creating a CSV export tool
 *
 * Plugin URI: https://github.com/trendwerk/csv-exporter
 *
 * Author: Trendwerk
 * Author URI: https://github.com/trendwerk
 *
 * Version: 0.1.0
 */

include_once('lib/autoload.php');

new Trendwerk\CSVExporter\Admin();
new Trendwerk\CSVExporter\Export();
new Trendwerk\CSVExporter\Localisation();
