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

namespace Trendwerk\CsvExporter;

include_once('lib/autoload.php');

new Admin();
new Export();
new Plugin();
