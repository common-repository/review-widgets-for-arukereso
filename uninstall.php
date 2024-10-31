<?php
if (!defined('WP_UNINSTALL_PLUGIN')) {
die;
}
require_once plugin_dir_path( __FILE__ ) . 'trustindex-plugin.class.php';
$trustindex_pm_arukereso = new TrustindexPlugin_arukereso("arukereso", __FILE__, "12.4.1", "Widgets for Árukereső Reviews", "Árukereső");
$trustindex_pm_arukereso->uninstall();
?>